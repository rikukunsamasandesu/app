<?php
/**
 * Forum Special Page
 * @author Kyle Florence, Saipetch Kongkatong, Tomasz Odrobny
 */
class ForumSpecialController extends WikiaSpecialPageController {

	public function __construct() {
		parent::__construct('Forum', '', false);
	}

	public function init() {
		$this->response->addAsset('extensions/wikia/Forum/css/Forum.scss');
		$this->response->addAsset('extensions/wikia/Forum/css/ForumSpecial.scss');
		$this->response->setJsVar('wgIsForum', true);
		$this->wg->IsForum = true;
	}

	public function index() {
		$this->wf->profileIn( __METHOD__ );
		
		$action = $this->getVal('action', '');
		
		if('editmode' == $action) {
			$this->forward('ForumSpecial', 'editMode');
		}
		
		$this->wg->Out->setPageTitle($this->wf->msg('forum-forum-title', $this->wg->Sitename));

		$action = $this->getVal('action', '');

		$this->blurb = $this->wf->MsgExt('forum-specialpage-blurb', 'parse');
		$this->blurbHeading = $this->wf->Msg('forum-specialpage-blurb-heading');
		$this->lastPostByMsg = $this->wf->Msg('forum-specialpage-board-lastpostby');
		$this->canEdit = $this->wg->User->isAllowed( 'forumadmin' );
		$this->editUrl = $this->wg->Title->getFullUrl('action=editmode');

		$forum = F::build( 'Forum' );

		/* if the Board is empty we will create defult board */
		//TODO: move create to wikilabs hook
		if($forum->createDefaultBoard()) {
			$this->boards = $forum->getBoardList(DB_MASTER);
		} else {
			$this->boards = $forum->getBoardList();
		}
		
		
		if($forum->haveOldForums()) {
			$this->showOldForumLink = true;
			$this->oldForumLink = Title::newFromText('Index', NS_FORUM)->getFullUrl();
		} else {
			$this->showOldForumLink = false;
		}
		
		$this->wf->profileOut( __METHOD__ );
	}
	
	public function editMode() {
		$this->wf->profileIn( __METHOD__ );
		
		if (!$this->wg->User->isAllowed( 'forumadmin' )) {
			$this->displayRestrictionError();
			return false;  // skip rendering
		}
		
		// set assets
		$this->response->addAsset('extensions/wikia/Forum/css/ForumBoardEdit.scss');
		
		$this->boards = F::build( 'Forum' )->getBoardList();
		
		$this->wf->profileOut( __METHOD__ );
	}
}
