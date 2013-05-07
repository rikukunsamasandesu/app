<?php
/**
 * WAM Page
 *
 * @author Andrzej 'nAndy' Łukaszewski
 * @author Marcin Maciejewski
 * @author Sebastian Marzjan
 * @author Damian Jóźwiak
 * @author Łukasz Konieczny
 *
 */

$dir = dirname(__FILE__) . '/';
$app = F::app();

$wgExtensionCredits['specialpage'][] = array(
	'name' => 'WAM Page',
	'author' => 'Andrzej "nAndy" Łukaszewski, Marcin Maciejewski, Sebastian Marzjan, Damian Jóźwiak, Łukasz Konieczny',
	'description' => 'WAM Page',
	'version' => 1.0
);

// classes
$wgAutoloadClasses[ 'WAMPage'] =  $dir . 'WAMPage.class.php' ;
$wgAutoloadClasses[ 'WAMPageArticle'] =  $dir . 'WAMPageArticle.class.php' ;
$wgAutoloadClasses[ 'WAMPageController'] =  $dir . 'WAMPageController.class.php' ;
$wgAutoloadClasses[ 'WAMPageHooks'] =  $dir . 'WAMPageHooks.class.php' ;
$wgAutoloadClasses[ 'WAMPageModel'] =  $dir . 'models/WAMPageModel.class.php' ;

// hooks
$app->registerHook('ArticleFromTitle', 'WAMPageHooks', 'onArticleFromTitle');
$app->registerHook('MakeGlobalVariablesScript', 'WAMPageHooks', 'onMakeGlobalVariablesScript');
$app->registerHook('LinkBegin', 'WAMPageHooks', 'onLinkBegin');
$app->registerHook('WikiaCanonicalHref', 'WAMPageHooks', 'onWikiaCanonicalHref');


// i18n
$wgExtensionMessagesFiles['WAMPage'] = $dir . 'WAMPage.i18n.php' ;
