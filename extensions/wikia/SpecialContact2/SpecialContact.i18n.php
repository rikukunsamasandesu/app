<?php
/**
 * Internationalisation file for SpecialContact extension.
 *
 * @addtogroup Extensions
 */

$messages = array();

$messages['en'] = array(
	/* special page */
	'contact' => 'Contact Wikia',
	'specialcontact-wikia' => 'Contact Wikia',
	'specialcontact-pagetitle' => 'Contact Wikia Support Staff',

	/* picker */
	'specialcontact-intro-main-head' => "<big>Need help? Don't worry, the Wikia community is here to help you!</big><br/>
Follow the links below to learn more about how to use Wikia, make changes to your wiki or modify your account.",
	'specialcontact-intro-main-local' => '', #(this is meant to be blank)
	'specialcontact-intro-main-foot' => "'''Does this page answer your question?''' If not, please feel free to [[Special:contact/general|contact us]] to discuss your issue further. Remember you can always check out our '''[[w:c:community:Help:Index|help pages]]''', [[w:c:community:Blog:Wikia_Staff_Blog|staff blog]]  or post on our '''[[w:c:community:Special:Forum|community help forums]]'''. If you are looking for admin help and advice, stop by [[w:c:community:Admin_Central:Main_Page|Founder & Admin Central]].",


	'specialcontact-secheader-onwiki' => "Questions about this wiki",
		'specialcontact-seclink-content-issue' => "Issue with the wiki’s content",
		'specialcontact-seclink-user-conflict' => "Problem with another user?",
		'specialcontact-seclink-adoption' => "I want admin rights here",

	'specialcontact-secheader-account' => "Account changes",
		'specialcontact-seclink-account-issue' => "Can't access my account",
		'specialcontact-seclink-close-account' => "Disable my account",
		'specialcontact-seclink-rename-account' => "Rename my account",
		'specialcontact-seclink-blocked' => "My account is blocked",

	'specialcontact-secheader-editing' => "Participating on Wikia",
		'specialcontact-seclink-using-wikia' => "How do I use Wikia?",
		'specialcontact-seclink-feedback' => "I want to offer some feedback",
		'specialcontact-seclink-bug' => "I think I found a bug",
		'specialcontact-seclink-bad-ad' => "I see a broken or inappropriate ad",

	'specialcontact-secheader-setting' => "Changes to this wiki",
		'specialcontact-seclink-wiki-name-change' => "Sitename or URL",
		'specialcontact-seclink-design' => "Design",
		'specialcontact-seclink-features' => "Add or remove Features",
		'specialcontact-seclink-close-wiki' => "Close this wiki",

	/* titles (overrides normal page title) */
	'specialcontact-sectitle' => "Wikia Support - $1",
		'specialcontact-sectitle-general' => "Contact form",
		'specialcontact-sectitle-content-issue' => "Content issue",
		'specialcontact-sectitle-user-conflict' => "User interactions",
		'specialcontact-sectitle-adoption' => "Admin rights",

		'specialcontact-sectitle-account-issue' => "Account issue",
		'specialcontact-sectitle-close-account' => "Disable my account",
		'specialcontact-sectitle-rename-account' => "Rename my account",
		'specialcontact-sectitle-blocked' => "Account blocked",

		'specialcontact-sectitle-using-wikia' => "Using Wikia",
		'specialcontact-sectitle-feedback' => "Feedback",
		'specialcontact-sectitle-bug' => "Bug Report",
		'specialcontact-sectitle-bad-ad' => "Ad report",

		'specialcontact-sectitle-wiki-name-change' => "Wiki name change",
		'specialcontact-sectitle-design' => "Wiki design",
		'specialcontact-sectitle-features' => "Wiki features",
		'specialcontact-sectitle-close-wiki' => "Close this wiki",

	/* intros (message at top of page) */
	'specialcontact-intro-content-issue' => "The content on this wiki is created by the community here, and managed by the [[Special:ListAdmins|local admins]], not Wikia. If you wish to discuss this content, it is best to first contact the [[Special:ListAdmins|wiki's admins here]].

If you feel the content violates our [http://www.wikia.com/Terms_of_Use Terms of Use], you can contact Wikia staff directly [[Special:Contact/general|here]].",

	'specialcontact-intro-content-issue-mobile' => "The content on this wiki is created by the community here and not the admins, not Wikia. If you wish to discuss this content, it is best to first contact the wiki's admins.

If you feel the content violates our Terms of Use, you can contact Wikia staff.",
	'specialcontact-intro-user-conflict' => "Wikis are community space where each and every person needs to work together with others for it to be successful. While working together conflicts can sometimes arise - and the best way to solve them is to have an open and respectful conversation on your wiki about the issue.

If you need help, first contact your [[Special:ListAdmins|local admins]]. Admins are the local experts on the topic and community, so best to first chat with them further. If the admins are not able to help, or you feel the user is violating Wikia's [http://www.wikia.com/Terms_of_Use Terms of Use], you can contact Wikia staff directly [[Special:Contact/general|here]].

Happy editing!",
	'specialcontact-intro-adoption' => "Are you interested in becoming an admin here? If so, please first check if the [[Special:Listusers/sysop|local admins]] are active. If they are, leave them a message with your request. It is also a good idea to talk with fellow users about your request to gather their support. You may want to start by posting in your community forum.

If the local admins are not active, you can submit a request for admin status. Please visit the [[w:c:adopt|adoption wiki]] for more information, including the adoption criteria and the request page. Please remember to always provide a link to the wiki you wish to adopt.

If there's an active user community on the wiki you wish to adopt, please start a discussion on the wiki about who would make the best admins, and why you would like to become one. Please provide a link to this discussion at the [[w:c:adopt|Adoption wiki]]. Best of luck and happy editing!",

	'specialcontact-intro-account-issue' => "Sorry to hear you are having problems accessing your account. A couple of things to check:

*Remember account names are case sensitive
*Is your browser up-to-date?
*Have you confirmed your email address?
*Are you trying to log in via Facebook Connect? Be sure to follow the steps [[Help:Facebook_Connect|here]].
*Not able to create an account? It may be that you are not eligible for an account at this time. See [[homepage:Terms of Use#Membership|terms of use]] for more details.
*Lost your password? You can request a new password [[Special:Signup|here]] Once there, enter your username, and click the \"new password\" button. You will then receive an email with a new temporary password. You can use this to sign in and update your password to one of your choice.

If you have done all of these and are still having an issue - please send us a detailed report below. We will get back to you as soon as possible to help fix the problem.


Happy editing!",
	'specialcontact-intro-close-account' => "We are sorry you want to disable your account. Wikia has many wikis on all sorts of subjects and we'd love for you to stick around and find the one that's right for you. If you are having a local problem with your wiki, please don't hesitate to contact your [[Special:Listusers/sysop|local admins]] for help and advice.

If you have decided you definitely want to disable your account please be aware that Wikia does not have the ability to fully remove accounts, but we can disable them. This will ensure the account is locked and can't be used. This process is NOT reversible, and you will have to create a new account if you wish to rejoin Wikia. However, this process will not remove your contributions from a given wiki as these contributions belong to the community as a whole.

If you need any more information on what an account disable actually does, you can visit our [[Help:Close_my_account|help page on disabling your account]]. To confirm and disable your account, please fill out the form below.",
	'specialcontact-intro-rename-account' => "Changing your username is possible on Wikia, but only once, so be sure you want to change it before you submit a request. This process cannot be reversed, and once we change your username, we cannot change it again. Please make sure you have fully read this help page before sending in a request: http://help.wikia.com/wiki/Help:Changing_your_username

Once you have read that help page and are positive on the spelling of your new username, please submit a request below. Once your username is changed, you will receive a confirmation email. You can then log in with your new user name using your old password.

Happy editing!",
	'specialcontact-intro-blocked' => "Account blocks are usually set by the local admins, and not by Wikia. The name of the blocking admin should be on the block notice you received.You may be able to contact the blocking admin by leaving a message on your user talk page. This is still editable for blocked users (on some wikis) and changes will usually be seen by the other contributors to the wiki. Your user talk page is found by following the \"my talk\" link at the top right of any page.

However, if this talk page option is not available in your situation, then the best advice we can give you is to wait the block out or join the community at another of the many thousand Wikia wikis available.

If you feel you still need to discuss this block further with Wikia staff, please contact us [[Special:Contact/general|here]].",

	'specialcontact-intro-using-wikia' => "Now that you are a part of the community, you are able to edit and contribute to almost any page across Wikia. For some introductory help, check out our [[Help:Getting_Started|help pages here]]. They are a great place to learn the basics of editing, formatting and much more.

If you have questions about this specific wiki, start by [[Special:ListAdmins|contacting your local admins]].
You can also ask general questions to other community members on our [[w:c:community:Special:Forum|community help forum]].

Remember, you can't break a wiki, so don't be afraid to get started. Happy editing!",
	'specialcontact-intro-feedback' => "Got feedback? We would love to hear it! Please provide your thoughts and details below. If you have feedback on a Wikia Labs product, please provide feedback [[Special:WikiaLabs|there]].

Thanks in advance and happy editing!",
	'specialcontact-intro-bug' => "We are sorry to hear that you found a bug on Wikia. Please provide full details of the issue you are seeing below so we can investigate further. Important details to include are:
*Your username
*Link to your wiki
*Your browser information including type and version ([[Help:Supported_browsers|click here for our supported browser list]])
*Screenshot

For more advice on what to include in your report, please see [[w:c:community:Help:How to report bugs|our help page on bug reports]].

Thanks again for the report and for using Wikia.

Happy editing!",
	'specialcontact-intro-bad-ad' => "We are sorry to hear you encountered a bad advertisement on Wikia. If you could provide further details below we will share them with our advertising manager, who will review the ad and may be able to remove it from the system.

Be sure to tell us what wiki you're on, what ad you saw, and why it was a problem. It would also help if you could include a screenshot and the URL of the ad. Instructions for finding the URL of an ad are listed here: http://help.wikia.com/wiki/Help:Bad_advertisements

Thank you and happy editing!",

	'specialcontact-intro-wiki-name-change' => "If you are an admin here, you can request to change your [[Help:Title for the wiki|sitename]] or [[Help:Domain name|URL]] by filing out the form below. Please double check the spelling, and be sure of your correction, as we will not honor multiple requests. If you are not an admin here, here contact your local admins with your request [[Special:ListAdmins|here]].

Happy editing!",
	'specialcontact-intro-design' => "A wiki's design can be updated by any local admin on your wiki by using the [[Help:Theme_designer|Theme designer]]. If you are not an admin and wish to help with your wiki's design, first contact your [[Special:ListAdmins|local admins]].

If you would like help with creating a more customized design, you can submit a request to the Wikia Content team [[w:Community_Central:Content_Team/Requests|here]]. Please read through the guidelines before submitting a request there.

If you feel you have found a bug while updating your wiki's design, please provide us with a detailed report [[Special:Contact/bug|here]].

Happy editing!",
	'specialcontact-intro-features' => "Wikia offers many features, the majority of which are live on all wikis across the site by default.

If you are an admin and feel that specific feature is not working well for your wiki, please discuss with your wiki's community if they would also like the feature turned off. If everyone agrees, you can use the [[Special:WikiFeatures|Wiki Features]] section of the [[Special:AdminDashboard|Admin Dashboard]] to disable or re-enable features. If the feature is not list there, please [[Special:Contact/general|contact us]] with your request.

Admins interested in testing out new features that are still in development can check out the Labs section of [[Special:WikiFeatures|Wiki Features]].

Want to stay current on announcement of new features and improvements to current ones? Stop by and follow the [[w:c:community:Blog:Wikia_New_Features|staff blog new features list]]",

	'specialcontact-intro-close-wiki' => "Thanks for contacting Wikia. We don't usually delete wikis once they have been created. Wikis are community-owned projects, and a wiki you are no longer interested in can wait for someone else to come along and [[Special:Contact/adoption|adopt it]].

If you wish to rename your wiki or fix spelling or grammatical issues please first consult [[Help:Rename]] for renaming pages, and [[Help:Theme designer]] for renaming the title of your wiki. Wikis can easily have their names changed, without the hassle of starting over. If you wish to change your wiki's URL [[Special:Contact/general|please write to us]] as we'd be more than happy to do so for you as there is no need to close your wiki.

If you feel this wiki is on a topic that no other users may be interested in (such as a personal project), please submit a request using the form below. Please make the request from the wiki that needs closing.

I hope you find another wiki among the many that are part of Wikia, and join in building a fantastic resource about everything you are passionate about.

Happy editing!",

	'specialcontact-intro-general' => "You can contact [[w:project:Staff|Wikia Staff]] using this form. Admins of this wiki can be found [[Special:ListAdmins|here]].

	Additional information on how to report problems to Wikia can be found [[w:project:Report_a_problem|here]], or you can post on [[w:c:community:Special:Forum|Wikia Community Forums]] for user support.

If you prefer to use regular e-mail or have attachments, you can contact us at [mailto:community@wikia.com community@wikia.com].
",

	/* non-form footer */
	'specialcontact-noform-footer' => "'''Does this page answer your question?''' If not, please feel free to [[Special:contact/general|contact us]] to discuss your issue further. Remember you can always check out our '''[[w:c:community:Help:Index|help pages]]''', [[w:c:community:Blog:Wikia_Staff_Blog|staff blog]]  or post on our '''[[w:c:community:Special:Forum|community help forums]]'''. If you are looking for admin help and advice, stop by [[w:c:community:Admin_Central:Main_Page|Founder & Admin Central]].",

	/* form */
	'specialcontact-username' => 'Your username',
	'specialcontact-wikiname' => 'Which wiki',
	'specialcontact-realname' => 'Your name',
	'specialcontact-yourmail' => 'Your email',
	'specialcontact-problem' => 'Subject',
	'specialcontact-problemdesc' => 'Message',
	'specialcontact-mail' => 'Send to Wikia',
	'specialcontact-filledin' => 'This information has been filled in from your account preferences',
	'specialcontact-ccme' => 'Send me a copy of this message',
	'specialcontact-ccdisabled' => 'Disabled: Please [[Special:ConfirmEmail|validate]] your e-mail address to use this function',
	'specialcontact-notyou' => 'Not you?',
	'specialcontact-captchainfo' => 'Please enter the text in the image.',
	'specialcontact-captchatitle' => 'Blurry word',
	'specialcontact-formtitle' => 'Contact Wikia Support Staff',
	'specialcontact-label-screenshot' => 'Did you take a screenshot? If so, please upload here.',
	'specialcontact-label-additionalscreenshot' => 'If you have another screenshot please upload it here.',
	'specialcontact-label-bad-ad-description' => 'Please describe the problem with the ad',
	'specialcontact-label-bad-ad-link' => 'Please provide the URL of the page where you saw the bad ad',
	'specialcontact-label-bad-ad-url' => 'Please provide the URL the ad links to. See the [[{{int:specialcontact-label-bad-ad-help-page}}|help page]] for information on how to find this link.',
	'specialcontact-label-bad-ad-help-page' => 'Help:Bad advertisements',
	'specialcontact-label-bug-link' => 'Please provide the URL of the page where you are having the problem',
	'specialcontact-label-bug-feature' => 'What feature is this related to?',
	'specialcontact-label-bug-description' => 'Please describe the problem you are having',
	'specialcontact-label-close-account-confirm' => 'I confirm that I want to disable my Wikia account',
	'specialcontact-label-close-account-read-help' => 'I have read the [[Help:Close_my_account|help page on closing your account]]',
	'specialcontact-label-account-issue-description' => 'Please provide a detailed description of the issue you are having.',
	'specialcontact-label-rename-newusername' => 'Please enter the new username',
	'specialcontact-label-rename-account-confirm' => 'I confirm that the spelling and punctuation for my new name is correct',
	'specialcontact-label-rename-account-read-help' => 'I have read the [[Help:Changing your username|help page on renaming my account]]',
	'specialcontact-form-header' => 'Contact Wikia',
	'specialcontact-logged-in-as' => 'You are logged in as $1. [[Special:UserLogout|Not you?]]',
	'specialcontact-mail-on-file' => 'Your e-mail is set to $1. [[Special:Preferences|Do you wish to change it?]]',

	/* errors */
	'specialcontact-nomessage' => 'Please fill in a message',
	'specialcontact-captchafail' =>	'Incorrect or missing confirmation code.',
	'specialcontact-error-title' => 'Contact Form Error',
	'specialcontact-error-message' => 'Something went wrong while submitting your form. Please try again later.',
	'specialcontact-error-logintext' => 'You must be logged in to make this request. Please [[Special:SignUp|login to your account]] and try again.',
	'specialcontact-error-alreadyrenamed' => 'You have previously been renamed so you are not eligible for another one. Please [[Special:Contact/general|contact staff]] if you require further assistance.',

	/* email */
	'specialcontact-mailsub' => 'Wikia Support',
	'specialcontact-mailsubcc' => 'Copy of Wikia Contact Mail',
	'specialcontact-ccheader' => 'This is a copy of your message that was sent to Wikia Support',

	/* after */
	'specialcontact-submitcomplete' => 'Thank you for contacting Wikia. We receive and review all messages submitted here. We will do our best to get back to you in the next 2-3 business days, but please be patient as we work through all of the messages.

Remember, you can also find help in our [[w:c:community:Special:Forum|Community Forum]] and [[w:c:community:Help:Index|Help pages]]. You can keep up to date with the latest Wikia news on our [[w:c:community:Blog:Wikia_Staff_Blog |Staff Blog]]. Happy editing!',
);

$messages['de'] = array(
	/* Spezialseite */
	'contact' => 'Kontakt zu Wikia',
	'specialcontact-wikia' => 'Kontakt zu Wikia',
	'specialcontact-pagetitle' => 'Kontaktiere einen Wikia-Mitarbeiter',

	/* picker */
	'specialcontact-intro-main-head' => "<big>Brauchst du Hilfe? Mach dir keine Sorgen, die Wikia-Community ist hier um dir zu helfen.</big><br/>
Klicke auf die folgenden Links, um mehr darüber zu erfahren, wie man Wikis benutzt, Wikis anpasst oder das eigene Profil verändert.",
	'specialcontact-intro-main-local' => '', #(this is meant to be blank)
	'specialcontact-intro-main-foot' => "'''Beantwortet diese Seite deine Fragen?''' Falls nicht, dann [[Special:contact/general|schreib uns]]. Vergiss nicht, dass du dir immer unsere '''[[w:c:de.community:Hilfe:Übersicht|Hilfeseiten]]''', das [[w:c:de.community:Blog:Wikia_Deutschland_News|Wikia-Blog]]  oder unsere '''[[w:c:de.community:Spezial:Forum|Foren]]'''  ansehen kannst. Falls du ein Admin bist und nach Hilfe suchst, sieh dir unseren [[w:c:de.community:Admin-Bereich:Hauptseite|Gründer- und Adminbereich]] an.",


	'specialcontact-secheader-onwiki' => "Allgemeine Wiki-Fragen",
		'specialcontact-seclink-content-issue' => "Problem mit dem Inhalt eines Wiki?",
		'specialcontact-seclink-user-conflict' => "Problem mit einem anderen Benutzer?",
		'specialcontact-seclink-adoption' => "Ich möchte Admin-Rechte",

	'specialcontact-secheader-account' => "Profil-Veränderungen",
		'specialcontact-seclink-account-issue' => "Ich kann nicht auf mein Profil zugreifen",
		'specialcontact-seclink-close-account' => "Ich möchte mein Profil schließen lassen",
		'specialcontact-seclink-rename-account' => "Ich möchte meinen Namen ändern",
		'specialcontact-seclink-blocked' => "Mein Profil ist gesperrt",

	'specialcontact-secheader-editing' => "Bei Wikia mitmachen",
		'specialcontact-seclink-using-wikia' => "Wie benutze ich Wikia?",
		'specialcontact-seclink-feedback' => "Ich habe Vorschläge",
		'specialcontact-seclink-bug' => "Ich habe einen Bug gefunden",
		'specialcontact-seclink-bad-ad' => "Ich habe unangebrachte Werbung gesehen",

	'specialcontact-secheader-setting' => "Wiki-Veränderungen",
		'specialcontact-seclink-wiki-name-change' => "Namen oder URL ändern",
		'specialcontact-seclink-design' => "Design",
		'specialcontact-seclink-features' => "Funktionen hinzufügen oder entfernen",
		'specialcontact-seclink-close-wiki' => "Wiki schließen",

	/* titles (overrides normal page title) */
	'specialcontact-sectitle' => "Wikia-Support - $1",
		'specialcontact-sectitle-general' => "Kontaktformular",
		'specialcontact-sectitle-content-issue' => "Probleme mit dem Inhalt",
		'specialcontact-sectitle-user-conflict' => "Benutzer-Probleme",
		'specialcontact-sectitle-adoption' => "Adminrechte",

		'specialcontact-sectitle-account-issue' => "Profil-Probleme",
		'specialcontact-sectitle-close-account' => "Profil stilllegen",
		'specialcontact-sectitle-rename-account' => "Namen ändern",
		'specialcontact-sectitle-blocked' => "Profil gesperrt",

		'specialcontact-sectitle-using-wikia' => "Wikia benutzen",
		'specialcontact-sectitle-feedback' => "Feedback",
		'specialcontact-sectitle-bug' => "Bugs melden",
		'specialcontact-sectitle-bad-ad' => "Werbung melden",

		'specialcontact-sectitle-wiki-name-change' => "Wiki-Namen ändern",
		'specialcontact-sectitle-design' => "Wiki-Design",
		'specialcontact-sectitle-features' => "Wiki-Funktionen",
		'specialcontact-sectitle-close-wiki' => "Wiki schließen",

	/* intros (message at top of page) */
	'specialcontact-intro-content-issue' => "Der Inhalt dieses Wikis wurde von dessen Community erstellt und wird nicht von Wikia, sondern von den [[Special:ListAdmins|lokalen Admins]] verwaltet. Falls du Probleme oder Fragen zum Inhalt dieses Wikis hast, wende dich bitte an die [[Special:ListAdmins|Admins]].

Falls du glaubst, dass der Inhalt gegen unsere [http://de.wikia.com/Nutzungsbedingungen Nutzungsbedingungen] verstößt, kannst du dich [[Special:Contact/general|hier]] an einen Wikia-Mitarbeiter wenden.",
	'specialcontact-intro-user-conflict' => "Ein Wiki ist ein Treffpunkt der Community, wo alle zusammenarbeiten müssen, damit es zum Erfolg wird. Dort, wo viele zusammen an einer Sache arbeiten, gibt es immer Konflikte und Meinungsverschiedenheiten. Diese lassen sich am besten durch eine gesunde und respektvolle Diskussion regeln.

Falls du Hilfe brauchst, wende dich zuerst an deine [[Special:ListAdmins|lokalen Admins]]. Die Admins sind die Experten was das Wiki und dessen Benutzer angeht. Falls die Admins nicht im Stande sind, dir zu helfen, oder der Benutzer gegen Wikias [http://de.wikia.com/Nutzungsbedingungen Nutzungsbedingungen] verstößt, kannst du dich [[Special:Contact/general|hier]] direkt an einen Wikia-Mitarbeiter wenden.",
	'specialcontact-intro-adoption' => "Würdest du gerne Admin auf diesem Wiki werden? Falls ja, dann musst du zuerst überprüfen ob einer der [[Special:Listusers/sysop|lokalen Admins]] aktiv ist. Falls ja, dann schreib ihn einfach an. Des Weiteren ist es immer schlau mit den anderen Benutzern des Wikis darüber zu diskutieren. Wenn du ihren Segen hast, dann ist is grundsätzlich einfacher die Adminrechte im Wiki zu bekommen.

Falls die Admins nicht aktiv sind, dann kannst du einen Antrag für eine [[w:c:de.community:Projekt:Beantragung_einer_Wiki-Adoption|Adoption]] stellen.

Wenn das Wiki eine aktive Community besitzt, dann diskutiere mit ihnen wer ein passender Admin für das Wiki wäre, und warum ausgerechnet du der Beste für diesen Job bist. Füge bitte den Link zur Diskussion der [[w:c:de.community:Projekt:Beantragung_einer_Wiki-Adoption|Adoptionsanfrage]] bei.",

	'specialcontact-intro-account-issue' => 'Es tut uns Leid, dass du Probleme beim Zugriff auf dein Profil hast. Hier ein paar Sachen die zu überprüfen sind:

*Beachte die Groß-und Kleinschreibung des Profilnamens
*Hast du auch den neusten Browser?
*Ist deine E-Mail bestätigt?
*Versuchst du dich über Facebook Connect anzumelden? Folge den Anweisungen [[Help:Facebook_Connect|hier]].
*Du kannst kein Profil erstellen? Vielleicht bist du zur Zeit nicht berechtigt ein Profil zu erstellen. Um mehr darüber zu erfahren, besuche unsere  [http://de.wikia.com/Nutzungsbedingungen Nutzungsbedingungen].
*Passwort verloren? Du kannst [[Special:Signup|hier]] ein neues Passwort beantragen. Gib deinen Benutzernamen ein und klicke auf "neues Passwort". Dannach erhälst du eine E-Mail mit einem temporären Passwort. Benutze dieses Passwort um dich anzumelden und schließlich ein neues Passwort zu erstellen.',

	'specialcontact-intro-close-account' => "Es tut uns Leid, dass du deinen Account schließen möchtest. Wikia bietet eine große Anzahl an Wikis mit vielfältigen Themen und vielleicht ist da auch war für dich dabei. Falls du Probleme mit einem besonderen Wiki hast, dann kontaktiere bitte die [[Special:Listusers/sysop|lokalen Admins]]. Die helfen gerne weiter und können gegebenenfalls auch Ratschläge parat haben.

Beachte, dass wir Benutzerkonten nicht vollkommen löschen können. Wir können das Konto schließen, so dass der Zugang nicht mehr benutzt werden kann. Dieser Prozess kann nicht rückgängig gemacht werden. Solltest du den Wunsch verspüren, wieder bei Wikia mitzumachen, dann wirst du einen neuen Account erstellen müssen. Dieser Prozess löscht nicht deine Beiträge, da diese unter freier Lizenz stehen und dem Wiki und seiner Community gehören.

Um die Konto-Schließung zu bestätigen, fülle dieses Formular aus.",

	'specialcontact-intro-rename-account' => 'Der Benutzername auf Wikia kann zwar verändert werden, aber nur einmal. Der Prozess kann nicht rückgängig gemacht werden. Stelle sicher, dass du die [http://help.wikia.com/wiki/Help:Changing_your_username Hilfeseite] zum Thema "Benutzernamen umbennenen" gelesen habt bevor du den Antrag auf eine Umbennenung stellst.

Nachdem du die Hilfeseite gelesen und sichergestellt hast, dass dein neuer Name richtig geschrieben wurde, fülle bitte dieses Formular aus. Nachdem der Prozess beendet ist, bekommst du eine Bestätigungsmail geschickt. Im Anschluß kannst du dich mit dem neuen Namen anmelden und aktiv an Wikia teilnehmen.',

	'specialcontact-intro-blocked' => 'Die Benutzerkontosperren werden meistens von den lokalen Admins und nicht von Wikia verhängt. Der Name des Admins, der dich gesperrt hat, sollte auf der Sperrnotiz zu finden sein. Du kannst den Admin kontaktieren, indem du eine Nachricht auf deiner Nachrichtenseite hinterlässt. Das ist grundsätzlich möglich, (auf manchen Wikis sogar wenn ihr gesperrt worden seit). Du findest deine Nachrichtenseite, indem du auf "Nachrichten" (oben rechts in jedem Wiki) klickst.
Falls die Nachrichtenseite nicht bearbeitet werden kann, ist es am Besten, die Sperre auszusitzen oder sich ein neues Wiki zu suchen.

Falls du die Sperre dennoch mit einem Wikia-Mitarbeiter diskutieren willst dann kontaktiere uns [[Special:Contact/general|hier]].',

	'specialcontact-intro-using-wikia' => "Jetzt wo du ein Teil der Community bist, steht dir frei bei den Wikis deiner Wahl mitzumachen. Für Starthilfe, besuche die [[Help:Getting_Started|Hilfeseiten]].

Hast du Fragen zu einem bestimmten Wiki, dann [[Special:ListAdmins|frag die lokalen Admins]].
Du kannst auch jederzeit in unserem [[w:c:de.community:Spezial:Forum|Hilfeforum]] fragen.

Und vergiss nicht, dass man ein Wiki nicht kaputt machen kann! Experementieren ist erwünscht!",

	'specialcontact-intro-feedback' => "Vorschläge oder Feedback? Bitte schreibt uns! Falls eure Vorschläge sich auf Produkte aus Wikia Labs beziehen, dann schreibt bitte [[Special:WikiaLabs|hier]].

Danke und viel Spaß bei Wikia!",
	'specialcontact-intro-bug' => "Bitte beschreibt das Problem so deutlich wie möglich. Wichtige Details die einzubringen sind:
*Benutzername
*Ein Link zu ihrem Wiki
*Typ und Version eures Browsers ([[Help:Supported_browsers|Klickt hier für eine Liste der von uns unterstützten Browser]])
*Screenshot
*Alle weiteren Details.

Danke für eure Meldung und viel Erfolg auf Wikia.",

	'specialcontact-intro-bad-ad' => "Es tut uns Leid, dass du Probleme mit einer Anzeige hattest. Falls du weitere Details hast, teile sie mit uns. Wir leiten sie dann an unsere Marketing-Abteilung weiter, die die Anzeige eventuell von der Seite nehmen kann.

Vergiss nicht uns mitzuteilen, auf welchem Wiki du warst, welche Anzeige du gesehen hast und warum diese ein Problem darstellt. Eine große Hilfe wäre auch ein Screenshot und die URL der Anzeige. Hier findes du die Anleitung wie du die URL der Anzeige herausfinden kannst: http://help.wikia.com/wiki/Help:Bad_advertisements

Danke schön!",

	'specialcontact-intro-wiki-name-change' => "Falls du ein Admin in dem Wiki bist, kannst du hier den Antrag stellen, um den [[Help:Title for the wiki|Namen]] oder die [[Help:Domain name|URL]] zu ändern. Überprüfe die Schreibweise mehrmals um sicher zu stellen, das alles korrekt ist. Falls du kein Admin bist, dann wende dich mit deinem Antrag an die [[Special:ListAdmins|lokalen Admins]].",

	'specialcontact-intro-design' => "Das Wiki-Design kann von Admins im [[Help:Theme_designer|Theme-Designer]] bearbeitet werden. Falls du kein Admin bist, aber mit dem Design helfen willst, wende dich bitte zuerst an die [[Special:ListAdmins|lokalen Admins]].

Falls du ein fortgeschrittenes Design für dein Wiki willst, stelle einen Antrag an unser Team [[w:Community_Central:Content_Team/Requests|hier]]. Bitte lies dir die Richtlinien durch, bevor du den Antrag abschickst.

Falls du glaubst, dass du während des Design-Updates einen Bug gefunden hast, schicke uns einen detailierten [[Special:Contact/bug|Fehler-Report]].",

	'specialcontact-intro-features' => "Wikia bietet eine Vielfalt an Funktionen, von denen die meisten automatisch eingeschaltet sind.

Wenn du ein Admin bist und glaubst, dass dein Wiki eine der Funktionen nicht gebrauchen kann, dann berede das mit den Benutzern des Wikis. Falls die Mehrheit dafür ist, dann kannst du die Funktion im Menüpunkt [[Special:WikiFeatures|Wiki-Funktionen]] der [[Special:AdminDashboard|Wiki-Verwaltung]] abschalten. Falls die Funktion nicht in den Wiki-Funktionen zu finden ist, dann [[Special:Contact/general|kontaktiere uns]].

Admins, die Interesse daran haben Optionen zu testen, die noch in Entwicklung sind, können diese im Wikia Labs-Menü in den [[Special:WikiFeatures|Wiki-Funktionen]] einschalten.

Wenn du über neue Funktionen auf dem Laufenden gehalten werden willst, dann folge einfach unserem [[w:c:de.community:Blog:Neue_Wikia-Funktionen|Blog]]",

	'specialcontact-intro-close-wiki' => "Danke, dass du Wikia kontaktiert hast. Üblicherweise löschen wir keine Wikis, sofern sie einmal erstellt worden sind. Wiki-Projekte gehören der Community, und falls du nicht länger an einem Wiki interessiert bist, gibt es vielleicht jemand anderen, der es [[Special:Contact/adoption|adoptieren möchte]].

Falls du den Namen deines Wikis ändern möchtest oder es komplett neu gestalten möchtest, besuche [[Help:Rename]] um Seitennamen zu ändern, und [[Help:Theme designer]] um den Titel des Wikis zu ändern. Die Namen der Wikis können einfach geändert werden, ohne dass man komplett von vorne beginnen muss. Falls du die URL deines Wikis ändern möchtest, dann [[Special:Contact/general|schreib uns]] und wir werden es liebend gern für dich machen.

Wenn du das Gefühl hast, dass dieses Wiki keinen Nutzen für andere darstellt (wie z.B. ein Spam-Wiki oder ein persönliches Wiki), dann stelle einen Antrag, indem du dieses Formular benutzt. Bitte stelle den Antrag aus dem betreffenden Wiki.",

	'specialcontact-intro-general' => "Du kannst einen [[w:project:Staff|Wikia Mitarbeiter]] kontaktieren, indem du dieses Formular benutzt. Die Admins dieses Wiki können [[Special:ListAdmins|hier]] gefunden werden.

	Zusätzliche Informationen zur Meldung von Problemen können [[w:project:Report_a_problem|hier]] gefunden werden, oder ihr postet es iunsere '''[[w:c:de.community:Spezial:Forum|Foren]]'''

Falls ihr lieber eine E-Mail schicken wollt, dann schreibt uns an [mailto:community@wikia.com community@wikia.com].
",

	/* non-form footer */
	'specialcontact-noform-footer' => "'''Beantwortet das hier deine Frage?''' Wenn nicht, dann [[Special:contact/general|schreib uns]]. Vergiss nicht, du kannst dir jederzeit die '''[[w:c:de.community:Hilfe:Übersicht|Hilfeseiten]]''' ansehen, das [[w:c:de.community:Blog:Wikia_Deutschland_News|Wikia-Blog]] lesen oder in unseren '''[[w:c:de.community:Spezial:Forum|Foren]]''' posten. Falls du ein Admin bist und nach Hilfe und Ratschlägen suchst, dann besuche unseren [[w:c:de.community:Admin-Bereich:Hauptseite|Gründer & Admin Bereich]].",

	/* form */
	'specialcontact-username' => 'Bitte gib deinen Benutzernamen ein',
	'specialcontact-wikiname' => 'Welches Wiki',
	'specialcontact-realname' => 'Dein Name',
	'specialcontact-yourmail' => 'Deine E-Mail',
	'specialcontact-problem' => 'Betreff',
	'specialcontact-problemdesc' => 'Nachricht',
	'specialcontact-mail' => 'An Wikia senden',
	'specialcontact-filledin' => 'Diese Information wurde aus deinen Einstellungen entnommen',
	'specialcontact-ccme' => 'Schicke mir eine Kopie der Nachricht',
	'specialcontact-ccdisabled' => 'Deaktiviert: Bitte [[Special:ConfirmEmail|bestätige]] deine E-Mail, um diese Funktion benutzen zu können',
	'specialcontact-notyou' => 'Nicht du?',
	'specialcontact-captchainfo' => 'Bitte gib den Text des Bildes ein.',
	'specialcontact-captchatitle' => 'Undeutliches Wort',
	'specialcontact-formtitle' => 'Kontaktiere einen Wikia.Mitarbeiter',
	'specialcontact-label-screenshot' => 'Hast du einen Screenshot? Falls ja, lade ihn hier hoch.',
	'specialcontact-label-additionalscreenshot' => 'Hast du einen weiteren Screenshot? Lade ihn hier hoch.',
	'specialcontact-label-bad-ad-description' => 'Bitte beschreibe das Problem mit der Anzeige',
	'specialcontact-label-bad-ad-link' => 'Bitte gib die URL der Seite an, wo du die Anzeige gesehen hast',
	'specialcontact-label-bug-link' => 'Bitte gib die URL der Seite an, mit der du das Problem hast',
	'specialcontact-label-bug-feature' => 'Um welche Funktion geht es?',
	'specialcontact-label-bug-description' => 'Bitte beschreibe das Problem, das du hast',
	'specialcontact-label-close-account-confirm' => 'Ich bestätige, dass ich mein Benutzerkonto schließen möchte',
	'specialcontact-label-close-account-read-help' => 'Ich habe die [[Help:Close_my_account|Hilfeseite zur Konto-Schließung gelesen]]',
	'specialcontact-label-account-issue-description' => 'Bitte gib eine detailierte Beschreibung des Problems an',
	'specialcontact-label-rename-newusername' => 'Gib den neuen Benutzernamen ein',
	'specialcontact-label-rename-account-confirm' => 'Ich bestätige hiermit, dass der Name korrekt geschrieben wurde',
	'specialcontact-label-rename-account-read-help' => 'Ich habe die [[Help:Changing_your_username|Hilfeseiten zur Namensänderung gelesen]]',
	'specialcontact-form-header' => 'Wikia kontaktieren',
	'specialcontact-logged-in-as' => 'Du bist als $1 angemeldet. [[Special:UserLogout|Nicht du?]]',
	'specialcontact-mail-on-file' => 'Deine E-Mail ist $1. [[Special:Preferences|Möchtest du sie ändern?]]',

	/* errors */
	'specialcontact-nomessage' => 'Bitte eine Nachricht eingeben',
	'specialcontact-captchafail' =>	'Falscher, oder nicht vorhandender Nachrichtencode.',
	'specialcontact-error-title' => 'Kontaktformular-Fehler',
	'specialcontact-error-message' => 'Beim Absenden des Formulars ist ein Fehler aufgetreten. Bitte versuche es später erneut.',
	'specialcontact-error-logintext' => 'Du musst angemeldet sein, um diesen Antrag zu stellen. Bitte [[Special:SignUp|melde dich an]] und versuche es erneut.',
	'specialcontact-error-alreadyrenamed' => 'Dein Benutzername wurde schon einmal geändert. Kontaktiere einen [[Special:Contact/general|Wikia-Mitarbeiter]] um weitere Informationen darüber zu erhalten.',

	/* email */
	'specialcontact-mailsub' => 'Wikia-Support',
	'specialcontact-mailsubcc' => 'Kopie der Wikia Kontakt-Mail',
	'specialcontact-ccheader' => 'Das ist eine Kopie der E-Mail, die an den Wikia-Support geschickt wurde',

	/* after */
	'specialcontact-submitcomplete' => "Danke, dass du Wikia kontaktiert hast. Wir haben alle hier angegebenen Informationen bekommen. Wir werden unser bestes tun, um innerhalb von 2 Arbeitstagen auf deine Nachricht zu antworten. Wir bitten um Geduld.

Vergiss nicht, du kannst dir jederzeit die '''[[w:c:de.community:Hilfe:Übersicht|Hilfeseiten]]''' ansehen, den [[w:c:community:Blog:Wikia_Staff_Blog|Wikia-Blog]] lesen oder in unseren '''[[w:c:de.community:Spezial:Forum|Foren]]''' posten.",
);

$messages['es'] = array(
	/* special page */
	'contact' => 'Contacta con Wikia',
	'specialcontact-wikia' => 'Contacta con Wikia',
	'specialcontact-pagetitle' => 'Contact Wikia Support Staff',

	/* picker */
	'specialcontact-intro-main-head' => "<big>¿Necesitas ayuda? ¡Que no cunda el pánico, la comunidad de Wikia está aquí para ayudarte!</big><br/>
Sigue los enlaces que hay debajo para aprender más sobre cómo usar Wikia, hacer cambios en tu wiki o modificar tu cuenta.",
	'specialcontact-intro-main-local' => '', #(this is meant to be blank)
	'specialcontact-intro-main-foot' => "'''¿Responde esta página a tu pregunta?''' Si no lo hace, siéntete libre de [[Special:contact/general|contactar con nosotros]] para hablar sobre el problema que tienes. Recuerda que siempre puedes revisar nuestras '''[[w:c:ayuda|páginas de ayuda]]''', [[w:c:comunidad:Blog:Noticias_de_Wikia|blog del staff]] o dejar un mensaje en nuestros '''[[w:c:comunidad:Foro:Índice|foros de ayuda]]'''.",


	'specialcontact-secheader-onwiki' => 'Preguntas sobre este wiki',
		'specialcontact-seclink-content-issue' => 'Problemas con el contenido del wiki',
		'specialcontact-seclink-user-conflict' => '¿Problemas con otro usuario?',
		'specialcontact-seclink-adoption' => 'Quiero permisos de administrador en este wiki',

	'specialcontact-secheader-account' => 'Cambios en tu cuenta',
		'specialcontact-seclink-account-issue' => 'No puedo acceder a mi cuenta',
		'specialcontact-seclink-close-account' => 'Desactivar mi cuenta',
		'specialcontact-seclink-rename-account' => 'Renombrar mi cuenta',
		'specialcontact-seclink-blocked' => 'Mi cuenta está bloqueada',

	'specialcontact-secheader-editing' => 'Participando en Wikia',
		'specialcontact-seclink-using-wikia' => '¿Cómo uso Wikia?',
		'specialcontact-seclink-feedback' => 'Quiero dar mis sugerencias',
		'specialcontact-seclink-bug' => 'Creo que encontré un bug',
		'specialcontact-seclink-bad-ad' => 'Veo un anuncio roto o inapropiado',

	'specialcontact-secheader-setting' => 'Cambios en el wiki',
		'specialcontact-seclink-wiki-name-change' => 'Nombre del wiki o dirección',
		'specialcontact-seclink-design' => 'Diseño',
		'specialcontact-seclink-features' => 'Añadir o quitar funcionalidades',
		'specialcontact-seclink-close-wiki' => 'Cerrar este wiki',

	/* titles (overrides normal page title) */
	'specialcontact-sectitle' => 'Ayuda de Wikia - $1',
		'specialcontact-sectitle-general' => 'Formulario de contacto',
		'specialcontact-sectitle-content-issue' => 'Problema con el contenido',
		'specialcontact-sectitle-user-conflict' => 'Interacciones con los usuarios',
		'specialcontact-sectitle-adoption' => 'Permisos de administrador',

		'specialcontact-sectitle-account-issue' => 'Problemas en la cuenta de usuario',
		'specialcontact-sectitle-close-account' => 'Desactivar mi cuenta',
		'specialcontact-sectitle-rename-account' => 'Renombrar mi cuenta',
		'specialcontact-sectitle-blocked' => 'Cuenta bloqueada',

		'specialcontact-sectitle-using-wikia' => 'Usando Wikia',
		'specialcontact-sectitle-feedback' => 'Sugerencias',
		'specialcontact-sectitle-bug' => 'Informe de bug',
		'specialcontact-sectitle-bad-ad' => 'Informe de anuncio inadecuado',

		'specialcontact-sectitle-wiki-name-change' => 'Cambio del nombre del wiki',
		'specialcontact-sectitle-design' => 'Diseño del wiki',
		'specialcontact-sectitle-features' => 'Funcionalidades del wiki',
		'specialcontact-sectitle-close-wiki' => 'Cerrar este wiki',

	/* intros (message at top of page) */
	'specialcontact-intro-content-issue' => "El contenido de este wiki es creado por su comunidad, y controlado por los [[Special:ListAdmins|administradores locales]], no por Wikia. si deseas discutir sobre el contenido del wiki, lo mejor es que contactes primero a los [[Special:ListAdmins|administradores que hay aquí]].

Si piensas que el contenido viola nuestros [http://comunidad.wikia.com/wiki/Project:Términos_de_uso Términos de uso], puedes contactar con el staff de Wikia directamente [[Special:Contact/general|desde aquí]].",
	'specialcontact-intro-user-conflict' => "Los wikis son espacios comunitarios donde cada persona tiene que trabajar codo con codo con otros usuarios para que todo salga bien. Mientras trabajan juntos pueden surgir conflictos a veces - y la mejor forma de resolverlos suele ser tener una conversación abierta y desde el respecto sobre el problema en el wiki.

Si necesitas ayuda, primero contacta con tus [[Special:ListAdmins|administradores locales]]. Los administradores son expertos locales sobre el tema del wiki y su comunidad, así que lo mejor es hablar con ellos antes. Si los administradores no pueden ayudar, o piensas que un usuario rompe los [http://comunidad.wikia.com/wiki/Project:T%C3%A9rminos_de_uso Términos de uso], puedes contactar con el equipo de Wikia directamente [[Special:Contact/general|aquí]].

¡Y no olvides que los wikis son para divertirse mientras se edita!",
	'specialcontact-intro-adoption' => "¿Quieres ser administrador del wiki? Antes de eso, asegúrate de comprobar la lista de [[Special:Listusers/sysop|administradores locales]] para ver si están activos. Si lo están, déjales un mensaje con tu petición. También es buena idea hablar con los usuarios sobre tu petición para que te ayuden a convertirte en administrador. Quizás deberías dejar un mensaje en el foro de la comunidad.

Si los administradores locales no están activos, puedes solicitar el rango de administrador. Por favor visita la [[w:c:comunidad:Project:Adopción|página de adopciones]] para obtener más información al respecto, como los requisitos para solicitar los permisos o cómo solicitarlos. Por favor, recuerda siempre usar el formulario correspondiente para solicitar la adopción del wiki.

Si hay una comunidad de usuarios activa en el wiki que quieres adoptar, antes de solicitar los permisos, inicia una conversación en el wiki sobre quién sería el mejor administrador y por qué te quieres hacer cargo del wiki. Si la comunidad acepta, añade el enlace al formulario de adopción en la [[w:c:comunidad:Project:Adopción|página de adopciones]]. ¡Buena suerte con tu petición, y diviértete!",

	'specialcontact-intro-account-issue' => 'Sentimos que tengas problemas para acceder a tu cuenta, aquí tienes algunas cosas que deberías tener en cuenta:

*Recuerda que los nombres de usuario son sensibles a mayúsculas y minúsculas
*¿Está tu navegador actualizado?
*¿Has confirmado tu dirección de correo electrónico?
*¿Estás intentando identificarte a través de Facebook Connect? Asegúrate de seguir los pasos según explicamos [[Help:Facebook_Connect|aquí]].
*¿No puedes crear una cuenta? Puede ser que estés escogiendo un nombre no permitido. Lee los [[w:c:comunidad:Project:Términos_de_uso#Membresía|términos de uso]] para más detalles.
*¿Perdiste tu contraseña? Puedes solicitar una nueva contraseña desde [[Special:Signup|aquí]]. Una vez en esa página, introduce tu nombre de usaurio, y haz clic en "Enviar una nueva contraseña por correo electrónico". Recibirás una contraseña temporal en tu correo para poder cambiar la contraseña

Si hiciste todas estas cosas y continúas teniendo problemas - envíanos un informe detallado usando el formulario de debajo. Te contestaremos lo antes posible para ayudarte a solucionar el problema.

¡Diviértete!',
	'specialcontact-intro-close-account' => "Sentimos que quieras desactivar tu cuenta. Wikia tiene muchos wikis sobre montones de temas diferentes y nos gustaría que te dieses una vuelta y encontrases alguno que te gustase para seguir colaborando. Si tienes un problema local en un wiki, por favor, no dudes en ponerte en contacto con tus [[Special:Listusers/sysop|administradores locales]] para que te ayuden y aconsejen.

Si estás completamente decidido a desactivar tu cuenta, por favor, ten en cuenta que Wikia no puede borrar completamente las cuentas, pero podemos desactivarlas. De esta forma te asegurarás de que la cuenta está cerrada y no podrá volver a ser utilizada. Este proceso NO es reversible, y tendrás que crear una nueva cuenta si deseas volver a participar en Wikia. En cualquier caso, este proceso no borra tus contribuciones en los wikis, ya que estas contribuciones forman parte de la propia comunidad del wiki.

Si necesitas más información sobre cómo desactivar tu cuenta, puedes visitar la [[Ayuda:Cerrar mi cuenta|página de ayuda para desactivar cuentas de usuario]]. Para confirmar que leíste la página y quieres desactivar tu cuenta, rellena el formulario de debajo.

Esperamos que hayas disfrutado mientras estuviste en Wikia y que si tienes algún problema, podamos solucionarlo para que continúes editando con nosotros.",
	'specialcontact-intro-rename-account' => "Es posible cambiar tu nombre de usuario, pero solamente una vez, así que asegúrate de querer cambiarlo antes de solicitarlo. Este proceso no puede ser revertido, y una vez cambiemos tu nombre de usuario, no podremos cambiarlo de nuevo. Por favor, lee completamente esta página de ayuda antes de enviar tu solicitud: [[w:c:ayuda:Ayuda:Renombrar mi cuenta|Ayuda:Renombrar mi cuenta]]

Una vez leas esa página de ayuda y estés seguro de que el nuevo nombre de usuario suena bien, envía tu solicitud [[Special:Contact/rename|aquí]]. Cuando tu nombre de usuario cambie, recibirás un email confirmándolo. Después podrás identificarte con tu nuevo nombre de usuario usando tu antigua contraseña.

¡Diviértete editando!",
	'specialcontact-intro-blocked' => "Normalmente, las cuentas de usuario son bloqueadas por los administradores locales de los wikis, y no por Wikia. Deberías ver el nombre del administrador que te bloqueó en el aviso que recibiste. Deberías poder dejarle un mensaje al administrador desde tu propia página de usuario. Esta continúa siendo editable por los usuarios bloqueados (en algunos wikis) y los cambios que se hagan ahí, podrán ser vistos por otros editores del wiki. Encontrarás tu página de discusión siguiendo el enlace que aparece arriba a la derecha al pulsar en la flecha al lado de tu nombre de usuario.

Si tu página de discusión no puede ser editada, el mejor consejo que podemos darte es que esperes a que el bloqueo finalice o participes en la comunidad de otro de los muchos wikis que hay en Wikia.

Si sientes que necesitas discutir tu bloqueo con el staff de Wikia, por favor, ponte en contacto con nosotros [[Special:Contact/general|por aquí]].",

	'specialcontact-intro-using-wikia' => "Ahora que formas parte de la comunidad, puedes editar y contribuir en cualquier página de Wikia. Comprueba nuestras [[Ayuda:Contenidos|páginas de ayuda]] para obtener una introducción de ayuda. Son un magnífico lugar donde aprender los conceptos básicos para editar, dar formato y mucho más.

Si tienes preguntas sobre un wiki en específico, comienza [[Special:ListAdmins|contactando con tus administradores locales]].
Puedes hacer preguntas generales a los miembros del wiki central de Wikia en español en el [[w:c:comunidad:Foro:Índice|foro de ayuda]].

Recuerda que los wikis no pueden romperse, así que no tengas miedo de empezar. ¡Diviértete mientras editas!",
	'specialcontact-intro-feedback' => "¿Tienes alguna sugerencia? ¡Nos encanta oírlas! Por favor, dinos lo que piensas a través del formulario de debajo. Si tienes algún comentario sobre un producto del Laboratorio de Wikia, déjanos el comentario [[Special:WikiaLabs|allí]].

¡Gracias por tus sugerencias y diviértete editando!",
	'specialcontact-intro-bug' => "Sentimos escuchar que encontraste un error en Wikia. Por favor danos todos los detalles del problema que descubriste en el formulario de debajo para que podamos investigar más al respecto. Los detalles importantes que debes incluir son:
*Tu nombre de usaurio
*Enlace a tu wiki
*Información sobre tu navegador (incluyendo versión y nombre)
*Captura de pantalla
*Todos los detalles que puedas para describirlo

Gracias de nuevo por informarnos al respecto.

¡Y no olvides divertirte mientras usas Wikia!",
	'specialcontact-intro-bad-ad' => "Vaya, malas noticias, sentimos que hayas encontrado un anuncio inapropiado. Si pudieras darnos todos los detalles que puedas sobre el anuncio, podremos avisar a nuestro administrador de publicidad, quién revisará el anuncio y decidirá si es necesario retirarlo del sistema.

Asegúrate de decirnos en qué wiki estás, qué anuncio viste, y por qué fue inapropiado. Nos será de mucha ayuda incluir una captura de pantalla y la dirección del anuncio. Aquí tienes las instrucciones para reportar anuncios inapropiados:
http://ayuda.wikia.com/wiki/Ayuda:Anuncios_inapropiados

Muchas gracias por tu ayuda, ¡esperamos que te diviertas usando Wikia!",

	'specialcontact-intro-wiki-name-change' => "Si eres administrador del wiki, puedes solicitar cambiar [[Ayuda:Título para el wiki|nombre del wiki (sitename)]] o su [[Help:Domain name|dirección]] rellenando el formulario de debajo. Por favor, comprueba que lo escribes bien, y corrígelo si te equivocas, así no tenemos que cambiarlo dos veces seguidas. Si no eres administrador, contacta con los administradores locales [[Special:ListAdmins|de esta lista]].

¡Diviértete!",
	'specialcontact-intro-design' => "El diseño del wiki puede ser cambiado por cualquier administrador local de tu wiki usando el [[Ayuda:Diseñador de Temas|Diseñador de temas]]. Si no eres administrador y quieres ayudar con el diseño del wiki, debes contactar antes con los [[Special:ListAdmins|administradores locales]].

Si quieres ayudar a crear un diseño más personalizado, puedes solicitar al Equipo de Contenido de Wikia que hagan un diseño personalizado para tu wiki [[w:Community_Central:Content_Team/Requests|aquí (en inglés)]]. Por favor, lee la guía antes de hacer tu solicitud allí.

Si piensas que has encontrado un bug mientras actualizabas el diseño del tu wiki, por favor, envíanos un informe detallado desde [[Special:Contact/bug|aquí]].

¡Diviértete editando!",
	'specialcontact-intro-features' => "Wikia ofrece muchas funcionalidades, la mayoría de ellas están activas en todos los wikis de Wikia por defecto.

Si eres administrador y piensas que una de las funcionalidades no está funcionando como debería, por favor, discute con la comunidad de tu wiki si están de acuerdo con desactivarla. Si todos aceptan, envíanos un mensaje con los detalles [[Special:Contact/general|por aquí]].

Los administradores interesados en probar nuevas funcionalidades que están aún en desarrollo, pueden revisar nuestro nuevo [[Special:WikiaLabs|Laboratorio de Wikia]] que permite activar (o desactivar) algunas de estas funcionalidades.

¿Quieres estar al tanto de las nuevas funcionalidades y mejoras que hacemos? Para y echa un vistazo al [[w:c:comunidad:Blog:Noticias_de_Wikia|blog de Wikia en español]] para estar informado.

¡Diviértete editando!",

	'specialcontact-intro-close-wiki' => "Gracias por ponerte en contacto con nosotros. Normalmente no borramos wikis una vez han sido creados. Los wikis son proyectos comunitarios, y si tú no estás interesado en continuar, puede que otros sí que estén interesados en [[Special:Contact/adoption|adoptarlo]].

Si piensas que este wiki trata sobre un tema que no interesará a otros usuarios (o es un wiki personal o considerado spam), por favor, rellena el formulario de debajo. Asegúrate de hacer la solicitud desde el wiki que quieres que sea cerrado.

Esperamos que encuentres otro wiki que forme parte de Wikia, en el que participar construyendo una fantástica fuente de información sobre cualquier tema que te apasione.

¡Diviértete editando!",

	'specialcontact-intro-general' => "Contacta con el [[w:c:comunidad:Staff_de_Wikia|Staff de Wikia]] usando este formulario. Los administradores de este wiki pueden ser encontrados [[Special:ListAdmins|aquí]].

Puedes encontrar información adicional sobre cómo reportar los bugs que veas en Wikia [[Ayuda:Cómo informar de fallos|aquí]], o puedes dejar un mensaje en los [[w:c:comunidad:Foro:Soporte_técnico|foros de la Comunidad Central]].

Si prefieres usar un email o adjuntar archivos, puedes contactar con nosotros en la dirección [mailto:community@wikia.com community@wikia.com].
",

	/* non-form footer */
	'specialcontact-noform-footer' => "'''¿Responde esta página a tu pregunta?''' Si no lo hace, siéntete libre de [[Special:contact/general|contactar con nosotros]] para hablar sobre el problema que tienes. Recuerda que siempre puedes revisar nuestras '''[[w:c:ayuda|páginas de ayuda]]''', [[w:c:comunidad:Blog:Noticias_de_Wikia|blog del staff]] o dejar un mensaje en nuestros '''[[w:c:comunidad:Foro:Índice|foros de ayuda]]'''.",

	/* form */
	'specialcontact-username' => 'Nombre de usuario',
	'specialcontact-wikiname' => 'Dirección del wiki',
	'specialcontact-realname' => 'Tu nombre',
	'specialcontact-yourmail' => 'Correo electrónico',
	'specialcontact-problem' => 'Asunto',
	'specialcontact-problemdesc' => 'Mensaje',
	'specialcontact-mail' => 'Enviar a Wikia',
	'specialcontact-filledin' => 'Esta información ha sido rellenada de acuerdo con tus preferencias',
	'specialcontact-ccme' => 'Enviadme una copia de este mensaje',
	'specialcontact-ccdisabled' => 'Deshabilitado: Por favor, confirma tu dirección de correo electrónico para usar esta función',
	'specialcontact-notyou' => '¿No eres tú?',
	'specialcontact-captchainfo' => 'Por favor, escribe el texto de la imagen.',
	'specialcontact-captchatitle' => 'Palabra borrosa',
	'specialcontact-formtitle' => 'Contactar con el Staff de Wikia',
	'specialcontact-label-screenshot' => '¿Tomaste una captura? Si es así, súbela aquí.',
	'specialcontact-label-additionalscreenshot' => 'Si tienes otra captura por favor súbela aquí.',
	'specialcontact-label-bad-ad-description' => 'Por favor describe el problema con el anuncio',
	'specialcontact-label-bad-ad-link' => 'Por favor incluye un enlace a la página donde viste el anuncio inadecuado.',
	'specialcontact-label-bug-link' => 'Por favor incluye un enlace a la página donde estás teniendo el problema',
	'specialcontact-label-bug-feature' => '¿A cuál funcionalidad está relacionado?',
	'specialcontact-label-bug-description' => 'Por favor describe el problema que estás teniendo',
	'specialcontact-label-close-account-confirm' => 'Confirmo que quiero deshabilitar mi cuenta en Wikia',
	'specialcontact-label-close-account-read-help' => 'He leído la [[w:c:ayuda:Help:Cerrar mi cuenta|página de ayuda sobre cerrar mi cuenta]]',
	'specialcontact-label-account-issue-description' => 'Por favor incluye una descripción detallada del problema que estás teniendo.',
	'specialcontact-label-rename-newusername' => 'Por favor escribe el nuevo nombre de usuario',
	'specialcontact-label-rename-account-confirm' => 'Confirmo que la gramática y la ortografía de mi nuevo nombre es correcta',
	'specialcontact-label-rename-account-read-help' => 'He leído la [[w:c:ayuda:Help:Renombrar mi cuenta|página de ayuda sobre renombrar mi cuenta]]',
	'specialcontact-form-header' => 'Contactar con Wikia',
	'specialcontact-logged-in-as' => 'Has iniciado sesión como $1. [[Special:UserLogout|¿No eres tú?]]',
	'specialcontact-mail-on-file' => 'Tu correo electrónico es $1. [[Special:Preferences|¿Quieres cambiarlo?]]',

	/* errors */
	'specialcontact-nomessage' => 'Por favor, rellena un mensaje',
	'specialcontact-captchafail' =>	'Código de confirmación incorrecto o faltante.',
	'specialcontact-error-title' => 'Error en el formulario',
	'specialcontact-error-message' => 'Algo falló cuando se intentaba enviar tu solicitud. Por favor inténtalo de nuevo más tarde.',
	'specialcontact-error-logintext' => 'Debes iniciar sesión para hacer esta solicitud. Por favor [[Special:SignUp|inicia sesión]] e inténtalo de nuevo.',
	'specialcontact-error-alreadyrenamed' => 'Tu cuenta ya ha sido renombrada por lo que no puedes volver a solicitar un cambio de nombre. Por favor [[special:contact/general|contacta con el equipo de Wikia]] si necesitas más ayuda.',

	/* email */
	'specialcontact-mailsub' => 'Correo de contacto de Wikia',
	'specialcontact-mailsubcc' => 'Copia del correo de contacto de Wikia',
	'specialcontact-ccheader' => 'Esta es una copia del mensaje que enviaste al Staff de Wikia',

	/* after */
	'specialcontact-submitcomplete' => 'Gracias por contactar con Wikia. Recibimos y revisamos todos los mensajes que se envían por aquí. En los próximos 2 o 3 días laborables recibirás una respuesta, por favor sé paciente mientras nos encargamos de todos los mensajes que recibimos.

Recuerda que puedes encontrar ayuda también en nuestro [[w:c:comunidad:Foro:Índice|foro]] de la comunidad de Wikia en español o en nuestro [[w:c:ayuda|wiki de ayuda]]. Y por supuesto si quieres mantenerte al día con las últimas novedades, sigue nuestro [http://es.wikia.com/wiki/Blog:Noticias_de_Wikia?action=watch blog de noticias]. ¡Diviértete!',
);

$messages['ja'] = array(
	/* special page */
	'contact' => 'ウィキアに連絡する',
	'specialcontact-wikia' => 'ウィキアに連絡する',
	'specialcontact-pagetitle' => 'ウィキアサポートスタッフに連絡する',

	/* picker */
	'specialcontact-intro-main-head' => "<big>助けが必要? 心配しないで,　ウィキアコミュニティーがあなたのお手伝いをさせていただきます。!</big><br/>ページの内容を変えたりあなたのアカウント内容の変更したりとウィキアの使用方法は下記のリンクから情報を得ることができます。。",
	'specialcontact-intro-main-local' => '', #(this is meant to be blank)
	'specialcontact-intro-main-foot' => "'''このページで充分な回答は得られましたか?''' そうでなければ [[Special:contact/general|連絡をとる]] で問題点を解決しましょう。またいつでも '''[[w:c:community:Help:Index|ヘルプページ]]''', [[w:c:community:Blog:Wikia_Staff_Blog|スタッフブログ]]  もしくは '''[[w:c:community:Forum:Community_Central_Forum|コミュニティーヘルプフォーラム]]'''. 管理者からのヘルプもしくはアドバイスが欲しい場合は, ここから [[w:c:community:Admin_Central:Main_Page|管理者のページ]].",


	'specialcontact-secheader-onwiki' => "このウィキアページについての質問",
	'specialcontact-seclink-content-issue' => "ウィキアページの内容についての問題",
	'specialcontact-seclink-user-conflict' => "他のユーザーとの問題が生じた場合?",
	'specialcontact-seclink-adoption' => "管理者の権利がほしい",

	'specialcontact-secheader-account' => "アカウントの変更",
	'specialcontact-seclink-account-issue' => "アカウントにアクセスできない",
	'specialcontact-seclink-close-account' => "アカウントを無効にする",
	'specialcontact-seclink-rename-account' => "アカウント名を変更する",
	'specialcontact-seclink-blocked' => "アカウントをブロックする",

	'specialcontact-secheader-editing' => "ウィキアの編集に参加する",
	'specialcontact-seclink-using-wikia' => "ウィキアの使用方法とは?",
	'specialcontact-seclink-feedback' => "フィードバックがほしい",
	'specialcontact-seclink-bug' => "不具合があります",
	'specialcontact-seclink-bad-ad' => "不適切な広告を見た場合",

	'specialcontact-secheader-setting' => "このウィキアページを変更する",
	'specialcontact-seclink-wiki-name-change' => "サイト名 もしくは URL",
	'specialcontact-seclink-design' => "デザイン",
	'specialcontact-seclink-features' => "記事を付け加えるまたは編集する",
	'specialcontact-seclink-close-wiki' => "このウィキアページを閉じる",

	/* titles (overrides normal page title) */
	'specialcontact-sectitle' => "ウィキアサポート - $1",
	'specialcontact-sectitle-general' => "コンタクトフォーム",
	'specialcontact-sectitle-content-issue' => "内容の問題",
	'specialcontact-sectitle-user-conflict' => "ユーザー同士の交流",
	'specialcontact-sectitle-adoption' => "管理者の権利",

	'specialcontact-sectitle-account-issue' => "アカウントの問題",
	'specialcontact-sectitle-close-account' => "アカウントを無効にする",
	'specialcontact-sectitle-rename-account' => "アカウント名を変更する",
	'specialcontact-sectitle-blocked' => "アカウントをブロックする",

	'specialcontact-sectitle-using-wikia' => "ウィキアを使う",
	'specialcontact-sectitle-feedback' => "フィードバック",
	'specialcontact-sectitle-bug' => "不具合を報告する",
	'specialcontact-sectitle-bad-ad' => "広告を報告する",

	'specialcontact-sectitle-wiki-name-change' => "ウィキアページ名変更",
	'specialcontact-sectitle-design' => "ウィキアページデザイン",
	'specialcontact-sectitle-features' => "ウィキアページの記事",
	'specialcontact-sectitle-close-wiki' => "このウィキアページを閉じる",

	/* intros (message at top of page) */
	'specialcontact-intro-content-issue' => "このウィキアページはこのコミュニティーページのメンバーによって作成されました。[[Special:ListAdmins|local admins]]様がこのウィキアページの管理者です。 ページ内容等についてのご質問はまずはこのページの管理者である [[Special:ListAdmins|wiki's admins here]]様にご連絡されるようお願い致します。

ページ内容が暴力的だと思われるのであれば [http://www.wikia.com/Terms_of_Use Terms of Use], ウィキアスタッフに直接ご連絡ください。 [[Special:Contact/general|here]].",

	'specialcontact-intro-content-issue-mobile' => "このウィキアページの内容なコミュニティーメンバによって制作させています。ページ内容についてのご質問等はそのページの管理者にまずはご確認いただきますようお願い致します。

ページ内容が不適切だと思われる場合は, ウィキアスタッフに直接ご連絡ください。",
	'specialcontact-intro-user-conflict' => "ウィキアは皆様に興味のある内容について投稿していただき１つのウィキアページを作り上げていくコミュニティースペースです。他のユーザー様との衝突が生じた場合 - 問題点を隠さずそのユーザーに敬意を払った態度で接し、問題解決を試みてください。

もし助けが必要であれば、まずは [[Special:ListAdmins|local admins]]。管理者はそのページとコミュニティーのエキスパートです。もし管理者が助けてくれないようであれば、 [http://www.wikia.com/Terms_of_Use Terms of Use], ウィキアスタッフに直接ご連絡ください。 [[Special:Contact/general|here]].

楽しんでね!",
	'specialcontact-intro-adoption' => "このページの管理者になる興味はありますか? もしそうであればまずはここをクリックして [[Special:Listusers/sysop|local admins]] アクティブの状態にしてください。 そしてあなたのリクエストをウィキアまで送信してください。管理者になるリクエストしたことをフォーラムページでコミュニティーのユーザーたちにもお知らせることをお薦めします。

もしあなたの興味のあるウィキアページの管理者があまり活動的でない場合, 管理者になりたいというリクエストをこちらに出すことができます。こちらのページに行って [[w:c:adopt|adoption wiki]] 管理者になるための条件を含む詳しい内容を確認し、その後リクエストをお願いします。リクエストには管理者になりたいトピックのリンクの記載をお願いします。

あなたが関わりたいウィキアページに活動的なユーザーがいる場合、誰が管理者としてコミュニティーを盛り上げまとめられるか、そしてなぜあなたがなぜ管理者になりたいのかということをよく話し合ってください。話合いの前にこちらのページをご参考ください。 [[w:c:adopt|Adoption wiki]]. ご健闘を祈ります!",

	'specialcontact-intro-account-issue' => "あなたのアカウントに問題が生じてしまいご迷惑おかけしまい申し訳ございません。 お手数ですがいくつかのことを確認してください:

*アカウント名は大文字・小文字の違いにとても敏感に反応します。
*ブラウザーは最新版ですか?
*Eメールアドレスを確認しましたか?
*フェイスブックからのログインを試みましたか? 下記でログイン方法を確認してください [[Help:Facebook_Connect|here]].
*アカウント作成ができない? アカウントを作成する過程でなんらかの支障が起こったと考えられます。こちらを [[homepage:Terms of Use#Membership|terms of use]] ご参照ください。
*パスワードを忘れてしまった? あたらしいパスワードを申請することができます。 [[Special:Signup|here]] ユーザー名を入力して \"new password\" をクリックしてください。Eメールにて仮のパスワードが送られてきます。そのパスワードとあなたのユーザー名でログインし新しいパスワードの設定をしてください。
上記のことをすべて試みてもまだ問題がある場合 - 大変お手数ですが下記のフォームから問題点を詳しく教えてください。問題解決に向けて早急にご連絡をさせていただきます。 W

楽しんでね!",
	'specialcontact-intro-close-account' => "アカウントが機能せずご迷惑をおかけしております。ウィキアは様々なトピックについてのページがたくさんあります。きっとお気に入りが見つかるはずです。もしご質問、問題点がございましたら大変お手数ですが、そのページの管理者まで [[Special:Listusers/sysop|local admins]] ご連絡ください。

あなたのアカウントを完全に消去することはできませんが、無効にすることは可能です。その際、アカウントはロックされ、二度と使用されることはございません。再度ウィキアで編集をされたい場合は再度アカウントを作成していただく必要がございます。あなたがウィキアページ作成に貢献された形跡も残りますのでご了承ください。

アカウントを無効にする詳しい説明は、 こちらで確認することができます。 [[Help:Close_my_account|help page on disabling your account]]. あなたのアカウントを無効にするために、 お手数ですが下記のフォームに記載ください。",
	'specialcontact-intro-rename-account' => "ユーザー名の変更は1度だけでしたら可能ですのでリクエストを出す前によくお考えください。一度ユーザー名を変更されますと、二度と変更できませんのでリクエストを出される前にヘルプページをよく読まれてください。: http://help.wikia.com/wiki/Help:Changing_your_username

ヘルプページを読み同意いただきましたら 下記からあなたの新しいユーザー名リクエストを送ってください。ユーザー名変更後、内容確認のEメールをさせていただきます。新しいユーザー名と従来のパスワードでログインしてください。

楽しんでね!",
	'specialcontact-intro-blocked' => "アカウントのブロックは管理者によって行われます。アカウントをブロックする際に管理者はまず警告を送ります。その警告の中にどの管理者があなたをブロックしたか記載されておりますのでまずはその管理者にトークページからご連絡ください。あなたのアカウントはブロックされている状態ですが、管理者に連絡することは可能となっております。ブロックされているユーザーでも編集作業ができるようになっています。また記入されたメッセージも他のユーザーから見れるようになっております。右上にある\"my talk\"からご投稿ください。

トークページが使用できない場合、ブロックが解除されるのを待っていただくか、他のウィキアページにご参加ください。
ブロックの問題が解決されていない場合、大変お手数ですがこちらまでご連絡ください。 [[Special:Contact/general|here]].",

	'specialcontact-intro-using-wikia' => "あなたはウィキアコミュニティーの一員です。ウィキアのページを編集することができます。編集のお手伝いが必要な場合は[[Help:Getting_Started|help pages here]]を参照にしてください。編集の仕方、フォーマットを詳しく説明しております。

ウィキアのページをはじめるにあたって質問がある場合、[[Special:ListAdmins|contacting your local admins]].
コミュニティーメンバーに質問がある場合、[[w:c:community:Forum:Community_Central_Forum|コミュニティーヘルプフォーラム]].

ウィキアページを壊すということはございませんので編集作業を恐れずに楽しんでください。!",
	'specialcontact-intro-feedback' => "フィードバックがほしい場合? ウィキアはいつでもユーザーからのご意見ご感想をお待ちしております。こちらからお願いします。 [[Special:WikiaLabs|there]].

いつもありがとうございます。!",
	'specialcontact-intro-bug' => "ウィキアで支障が生じてしまいご迷惑をおかけして申し訳ございません。大変お手数ですが下記にどのような支障が起きたのか記入して送信してください。その際に下記の件を含んでいただきますと幸いです。:
*あなたのユーザー名
*あなたのウィキアページをリンクしてください
*種類とバージョンを含めたブラウザー情報を入力してください。 ([[Help:Supported_browsers|click here for our supported browser list]])
*スクリーンショット

あなたのリポート内容はは, こちらで確認してください。[[w:c:community:Help:How to report bugs|our help page on bug reports]].

お知らせいただきましてありがとうございました。.

楽しんでね!",
	'specialcontact-intro-bad-ad' => "広告のせいで不快な思いをさせてしまい申し訳ございませんでした。広告担当者に説明をしたいので詳しい内容を教えていただけないでしょうか。その際にどのウィキアページで見たか、どんな広告内容だったか、なぜ不快感を得たのか等を含んでいただきますと幸いです。もしスクリーンショット、もしくはURLがあればそちらもお願い致します。URLを見つける方法はこちらをご参照ください。: http://help.wikia.com/wiki/Help:Bad_advertisements

ありがとうございます!",

	'specialcontact-intro-wiki-name-change' => "管理者であれば変更のリクエストは [[Help:Title for the wiki|sitename]] もしくは [[Help:Domain name|URL]] からすることができます。下記のフォームに記入してください。あなたが管理者でない場合は、こちらから管理者にリクエストを出すことができます。[[Special:ListAdmins|here]].

楽しんでね!",
	'specialcontact-intro-design' => "このウィキアページのデザインは管理者が [[Help:Theme_designer|Theme designer]]を利用して変更されました。あなたは管理者でないがページデザインのお手伝いをしたい場合、まず管理者にご連絡ください。 [[Special:ListAdmins|local admins]].

カスタムデザインを作りたい場合、ウィキア・コンテントチームにリクエストを出してください。 [[w:Community_Central:Content_Team/Requests|here]]. リクエストを出す前にガイドラインをよく読んでください。
デザインを新しくしている際に不具合が生じた場合、大変お手数ですがご連絡ください。 [[Special:Contact/bug|here]].

楽しんでね!",
	'specialcontact-intro-features' => "ウィキアはそのページに沿った様々な機能を提供しています。

あなたが管理者ウィキアのページで機能がうまく生じていないと思うのであれば、コミュニティーメンバーにその機能を終了してもいいかの確認をしてください。メンバーが同意したのであれば、こちらの [[Special:WikiFeatures|Wiki Features]] このページから [[Special:AdminDashboard|Admin Dashboard]] 機能が無効になるようにしてください。リストの中に機能を無効にすることがなければ大変お手数ですがこちらから [[Special:Contact/general|連絡をとる]] リクエストを出してください。

管理者でまだ開発中の新しい機能を試したい方はここからお願いします。 [[Special:WikiFeatures|Wiki Features]].

新しい機能の発表や改善を随時知りたい場合は? フォローおお願いします。 [[w:c:community:Blog:Wikia_New_Features|staff blog new features list]]",

	'specialcontact-intro-close-wiki' => "ウィキアにご連絡いただきましてありがとうございます。我々はめったに作られたれたウィキページを削除することはございません。全てページはコミュニティーユーザーたちによって作られたものですのであなたが参加していたウィキアのページに関わらない場合は他のユーザーに引き継いでもらうまで待っていただくことになります。[[Special:Contact/adoption|adopt it]].

ウィキアページの名前を変更したい場合、誤字脱字があって名前を変更したい場合は [[Help:Rename]]、もしくは [[Help:Theme designer]] で名前の変更をいたします。ウィキアのページは内容を編集中でも簡単に名前を変更することができます。ウィキアページのURLを変更したい場合は [[Special:Contact/general|please write to us]] にお手数ですがご記入をお願いします。メッセージを受け取った後すぐに作業に入りURLを変更させていただきます。
このウィキアページは他のユーザーにとって興味のないものだと思われる場合は (個人的な情報、ブログ等), 大変お手数ですが下記のフォームからウィキアページを閉じるリクエストを送ってください。

ウィキアには様々なコンテンツのページがあります。あなたが興味のあるコミュニティーを見つけたら是非参加してください。
楽しんでね!",

	'specialcontact-intro-general' => "このフォームを使って [[w:project:Staff|Wikia Staff]] ご連絡ください。 お探しのウィキアページの管理者を見つけます。[[Special:ListAdmins|here]].

	問題点をウィキアにレポートするための詳しい案内は [[w:project:Report_a_problem|here]], もしくはこちらから [[w:Forum:Index|Wikia Community Forums]] お願いします。
普段利用されているEメールにメールが欲しい場合や添付がある場合、大変お手数ですがこちらまでご連絡ください [mailto:community@wikia.com community@wikia.com].
",

	/* non-form footer */
	'specialcontact-noform-footer' => "'''このページで充分な回答は得られましたか?''' そうでなければ [[Special:contact/general|連絡をとる]] で問題点を解決しましょう。またいつでも '''[[w:c:community:Help:Index|ヘルプページ]]''', [[w:c:community:Blog:Wikia_Staff_Blog|スタッフブログ]]  もしくは '''[[w:c:community:Forum:Community_Central_Forum|コミュニティーヘルプフォーラム]]'''. 管理者からのヘルプもしくはアドバイスが欲しい場合は, ここから [[w:c:community:Admin_Central:Main_Page|管理者のページ]].",

	/* form */
	'specialcontact-username' => 'あなたのユーザー名',
	'specialcontact-wikiname' => 'どのウィキアページ',
	'specialcontact-realname' => 'あなたの名前',
	'specialcontact-yourmail' => 'Eメールアドレス',
	'specialcontact-problem' => '題名',
	'specialcontact-problemdesc' => 'メッセージ',
	'specialcontact-mail' => 'ウィキアにメッセージを送る',
	'specialcontact-filledin' => 'アカウント設定に必要な必要事項は自動的に記載されました。',
	'specialcontact-ccme' => '自分にもこのこのメッセージを送る',
	'specialcontact-ccdisabled' => '機能していません。: [[Special:ConfirmEmail|validate]] 機能するEメールアドレスを使用ください。',
	'specialcontact-notyou' => 'これはあなたのアカウントではない?',
	'specialcontact-captchainfo' => '画像の文字を入力してください。.',
	'specialcontact-captchatitle' => '曖昧な言葉',
	'specialcontact-formtitle' => 'ウィキアサポートスタッフに連絡する。',
	'specialcontact-label-screenshot' => 'もしスクリーンショットがあるのであれば添付してください。',
	'specialcontact-label-additionalscreenshot' => '他にスクリーンショットがあるのであればここで添付してください',
	'specialcontact-label-bad-ad-description' => 'この広告の問題点を教えてください',
	'specialcontact-label-bad-ad-link' => '悪影響な広告をみたページのURLを教えてください',
	'specialcontact-label-bug-link' => '問題のあったページのURLを教えてください',
	'specialcontact-label-bug-feature' => 'これはどのコンテンツと関わりがありますか?',
	'specialcontact-label-bug-description' => '問題点を教えてください',
	'specialcontact-label-close-account-confirm' => '私のアカウントを無効にすることに同意します。',
	'specialcontact-label-close-account-read-help' => 'このページを読みました。[[Help:Close_my_account|help page on closing your account]]',
	'specialcontact-label-account-issue-description' => '問題点を詳しく教えてください。',
	'specialcontact-label-rename-newusername' => '新しいユーザー名を入力しだください',
	'specialcontact-label-rename-account-confirm' => '新しいユーザー名のつづりは正しいです。',
	'specialcontact-label-rename-account-read-help' => 'このページを読みました。 [[Help:Changing your username|help page on renaming my account]]',
	'specialcontact-form-header' => 'ウィキアに連絡する',
	'specialcontact-logged-in-as' => 'あなたはこのユーザー名でログイン済みです。 $1. [[Special:UserLogout|Not you?]]',
	'specialcontact-mail-on-file' => 'Eメールはこちらで登録済です。 $1. [[Special:Preferences|Do you wish to change it?]]',

	/* errors */
	'specialcontact-nomessage' => 'メッセージを入力してください',
	'specialcontact-captchafail' =>	'間違っているか、途中が抜けてしまっている確認コードです。',
	'specialcontact-error-title' => 'コンタクトフォームエラー',
	'specialcontact-error-message' => 'メッセージを送信中にエラーがおきました。大変お手数ですがもう一度お願いします。',
	'specialcontact-error-logintext' => 'リクエストを送るときは必ずログインをしてください。 もう一度お願いします。 [[Special:SignUp|login to your account]]',
	'specialcontact-error-alreadyrenamed' => '以前に一度ユーザー名を変更されております為、今回ユーザー名をここで変更させていただくことができません。 [[Special:Contact/general|contact staff]] スタッフにご連絡ください。',

	/* email */
	'specialcontact-mailsub' => 'ウィキア サポート',
	'specialcontact-mailsubcc' => 'ウィキアコンタクトメールをコピーする。',
	'specialcontact-ccheader' => 'これはウィキアサポートに送られたメッセージのコピーです。',

	/* after */
	'specialcontact-submitcomplete' => 'ウィキアにご連絡いただきましてありがとうございます。お返事に2から3日ほどお時間をいただいておりますことをご了承ください。また、こちらのページ
[[w:c:community:Forum:Community_Central_Forum|コミュニティーヘルプフォーラム]] と [[w:c:community:Help:Index|ヘルプページ]]をご確認ください。ウィキアの最新ニュースはここで確認することができます。  [[w:c:community:Blog:Wikia_Staff_Blog |スタッフブログ]]. 楽しんでね!',
);

$messages['zh'] = array(
	/* special page */
	'contact' => '联系维基',
	'specialcontact-wikia' => '联系维基',
	'specialcontact-pagetitle' => '联系维基',

	/* picker */
	'specialcontact-intro-main-head' => "<big>在这里，维基社区发展和支持团队会帮您解决所有问题。</big><br/>
点击下面的链接了解如何使用维基以及如何更改您的维基主页或者个人帐户。",
	'specialcontact-intro-main-local' => '', #(this is meant to be blank)
	'specialcontact-intro-main-foot' => "'''请问我们帮您解决问题了吗？如果没有，请[[Special:contact/general|联系我们]]，告诉我们您遇到的相关问题。您也可以登陆我们的'''[[w:c:community:Help:Index|帮助中心]]'''或者[[w:c:community:Blog:Wikia_Staff_Blog|员工博客]]进行查询，或者去'''[[w:c:community:Forum:Community_Central_Forum|社区帮助论坛]]'''进行提问。如果您希望得到维基主页管理员的帮助或者建议，请访问[[w:c:community:Admin_Central:Main_Page|维基管理员中心]]进行查看。",


	'specialcontact-secheader-onwiki' => "关于维基的问题",
	'specialcontact-seclink-content-issue' => "关于维基内容的问题",
	'specialcontact-seclink-user-conflict' => "和其他维基用户起冲突？",
	'specialcontact-seclink-adoption' => "我想成为管理员",

	'specialcontact-secheader-account' => "帐户更改",
	'specialcontact-seclink-account-issue' => "不能登陆帐户",
	'specialcontact-seclink-close-account' => "关闭我的帐户",
	'specialcontact-seclink-rename-account' => "重新命名我的帐户",
	'specialcontact-seclink-blocked' => "我的帐户被封禁了",

	'specialcontact-secheader-editing' => "参与维基的讨论",
	'specialcontact-seclink-using-wikia' => "如何使用维基？",
	'specialcontact-seclink-feedback' => "我想提供一些反馈",
	'specialcontact-seclink-bug' => "我发现了一个程序故障",
	'specialcontact-seclink-bad-ad' => "我发现了一个不能播放或不适宜的广告",

	'specialcontact-secheader-setting' => "更换至一个新的维基主页",
	'specialcontact-seclink-wiki-name-change' => "维基主页名称或链接",
	'specialcontact-seclink-design' => "版面设计",
	'specialcontact-seclink-features' => "添加或者移出功能",
	'specialcontact-seclink-close-wiki' => "关闭维基",

	/* titles (overrides normal page title) */
	'specialcontact-sectitle' => "维基支持 - $1",
	'specialcontact-sectitle-general' => "联络表格",
	'specialcontact-sectitle-content-issue' => "内容问题",
	'specialcontact-sectitle-user-conflict' => "用户关系",
	'specialcontact-sectitle-adoption' => "管理员权限",

	'specialcontact-sectitle-account-issue' => "帐户问题",
	'specialcontact-sectitle-close-account' => "关闭我的帐户",
	'specialcontact-sectitle-rename-account' => "重新命名我的帐户",
	'specialcontact-sectitle-blocked' => "帐户封禁",

	'specialcontact-sectitle-using-wikia' => "使用维基",
	'specialcontact-sectitle-feedback' => "用户反馈",
	'specialcontact-sectitle-bug' => "程序故障",
	'specialcontact-sectitle-bad-ad' => "广告问题报告",

	'specialcontact-sectitle-wiki-name-change' => "维基网页名称变更",
	'specialcontact-sectitle-design' => "维基设计",
	'specialcontact-sectitle-features' => "维基功能",
	'specialcontact-sectitle-close-wiki' => "关闭维基",

	/* intros (message at top of page) */
	'specialcontact-intro-content-issue' => "维基内容全部来自于维基各个社区，由维基社区[[Special:ListAdmins|管理员]]进行统一管理。维基网不负责任何相关内容的发布和社区的管理。如果您有任何关于内容的问题，我们建议您可以直接联系此维基主页的[[Special:ListAdmins|管理员]]。

如果您认为相关内容违反了我们的“[http://www.wikia.com/Terms_of_Use 维基社区使用规定]”，您可以点击[[Special:Contact/general|这里]]直接联系我们。",

	'specialcontact-intro-content-issue-mobile' => "维基内容全部来自于维基各个社区，由维基社区管理员进行统一管理。维基网不负责任何相关内容的发布和社区的管理。如果您有任何关于内容的问题，我们建议您可以直接联系此维基主页的管理员。

如果您认为相关内容违反了我们的“维基社区使用规定”，您可以直接联系我们。",
	'specialcontact-intro-user-conflict' => "维基是通过所有人的共同合作建立的社区空间。在这种情况下，用户间不可避免地会发生一些冲突。最好的解决办法就是在您所参与的维基主页上，在尊重他人的基础上进行有效的沟通。

如果您需要任何帮助，可以首先联系此维基主页的[[Special:ListAdmins|管理员]]。他们负责社区的管理，会为您提供最好的帮助。如果管理员也不能帮到您，或者您认为某个用户违反了[http://www.wikia.com/Terms_of_Use 维基社区使用规定]，您可以直接[[Special:Contact/general|联系我们]]。",
	'specialcontact-intro-adoption' => "您有兴趣成为一位维基社区的管理员吗？如果答案是肯定的，请您首先查看这个维基主页的[[Special:Listusers/sysop|管理员]]是否活跃。如果他们还在一直帮助建设此维基主页，您可以直接联系他们，告诉他们您的请求。同时，您也可以和其他的维基用户进行讨论，获得他们的支持。您可以选择首先在社区论坛中发帖作为获得支持的第一步。

如果此维基主页的管理员并不活跃，您可以提交申请。有关更多信息，请访问[[w:c:adopt|更换维基管理员]]查询相关的更换标准以及提交申请的具体细节。您需要同时提交此维基主页的链接以供我们查看确认。

如果您想成为一个活跃的维基社区管理员，您需要在此维基上发起讨论，解释为什么您可以胜任管理员的工作。请在[[w:c:adopt|这里]]提供相关讨论的链接。",

	'specialcontact-intro-account-issue' => "很抱歉您不能正常登陆帐户。我们建议您首先检查以下操作：

*帐户名称是否使用大小写
*您的浏览器是否更新过
*您是否已经确认过登陆邮件？
*您是否使用Facebook的帐户进行登陆？请根据[[Help:Facebook_Connect|以下步骤]]进行操作。
*不能建立帐户？或许您并不符合建立帐户的条件。请点击[[homepage:Terms of Use#Membership|这里]]进行查看。
*忘记登陆密码了？您可以点击[[Special:Signup|这里]]发送重新设定密码的请求。输入您的账户名称，然后点击\"新密码\"按钮。您很快就会收到一封带有临时密码的邮件。您可以用这个临时密码登陆维基主页，然后重新设定一个新的密码。
如果您完成了这些步骤但是问题依然存在，请发信告诉我们相关细节。我们将会尽快地帮您解决问题。",
	'specialcontact-intro-close-account' => "我们对您删除帐户的请求感到很抱歉。维基网有许多不同的社区，我们希望您可以浏览其他社区找到您的兴趣所在。如果您对某个社区存在疑问，请联系这个社区的[[Special:Listusers/sysop|管理员]]获得帮助。

如果您确定想要删除使用帐户，我们需要提醒您的是，维基网并不会完全地移出您的帐户，而是采取禁用帐户。这样可以确保您的帐户不再被使用。一旦我们禁用了您的帐户，将无法恢复。如果您想重新加入维基社区，需要再次建立一个新的帐户。尽管如此，您之前在维基上所进行的任何活动跟这个新的帐户都没有任何关联，旧的帐户以及您以前在维基网上的活动都将无法和新的帐户建立任何联系。

如果您想了解更多有关删除帐户的信息，请访问[[Help:Close_my_account|这里]]。如果您已经确认需要删除帐户，请填写以下的表格。",
	'specialcontact-intro-rename-account' => "您在维基上仅有一次更改用户名的机会，所以在提交更改用户名之前，请再次确认。一旦作出更改，您将无法再改回之前的用户名。在您作出决定之前，请仔细阅读有关用户名更改细节：http://help.wikia.com/wiki/Help:Changing_your_username

在您仔细阅读了相关细节并且确认需要更改用户名之后，请提交以下申请。一旦用户名作出变更，您将会收到一封确认邮件。您可以使用新的用户名和旧的密码进行登陆。",
	'specialcontact-intro-blocked' => "帐户封禁一般是由维基社区的管理员进行操作的，而不是由维基网操作的。对帐户进行封禁的管理员名称会在发给您的通知邮件中找到。您可以通过在此管理员的个人主页上留言进行联系。在大多数的维基主页上，被封禁的帐户使用者依然可以进行此项操作；同时，其他的使用者也可以看到此项操作。您可以点击此维基主页右上方的 \"信息墙\"进行操作。

尽管如此，如果您不能执行以上操作，我们建议您耐心等待封禁解除，或者参与其他的维基社区。

如果您希望能够和我们探讨有关此次封禁，请访问[[Special:Contact/general|这里]]联系我们。",

	'specialcontact-intro-using-wikia' => "现在您已经是社区的一名成员了，您可以在维基的任何主页上进行编辑或者发言。您可以点击[[Help:Getting_Started|这里]]查看有关维基主页的介绍。在这里，您可以学到有关维基编辑以及格式建立的一些简单性操作。

如果您对某一个维基有任何问题，您可以联系此维基的[[Special:ListAdmins|管理员]]。您也可以登陆[[w:c:community:Forum:Community_Central_Forum|社区论坛]]进行提问，获得其他维基用户的帮助。",
	'specialcontact-intro-feedback' => "如果您有任何反馈或者建议，十分欢迎您及时地联系我们。请在下面告诉我们反馈或者建议的相关内容。如果你对维基实验室的产品有任何想法，请在[[Special:WikiaLabs|这里]]联系我们。十分感谢您对维基的支持和帮助！",
	'specialcontact-intro-bug' => "我们对您发现程序故障感到非常抱歉！请您提供有关细节帮助我们进行修改。您需要提供以下内容：
*帐户名称
*您的维基主页链接
*您的浏览器类型以及版本(点击[[Help:Supported_browsers|这里]]查看维基支持的浏览器种类)
*屏幕截图

您可以登陆[[w:c:community:Help:How to report bugs|程序故障报告帮助页]]查看更多内容。非常感谢您对维基的支持和帮助！",
	'specialcontact-intro-bad-ad' => "我们对您在维基网浏览了不合适的广告感觉非常抱歉！如果您能够提供有关细节，我们会反馈给公司的广告部门进行查看或者删除。

请告诉我们您所在的维基主页，所浏览的广告以及内容，影响您的原因，以及相关的广告截屏和广告链接。您可以在这里查看关于如何寻找广告链接：http://help.wikia.com/wiki/Help:Bad_advertisements

我们十分感谢您对维基的支持和帮助！",

	'specialcontact-intro-wiki-name-change' => "如果您是维基主页的管理员，您可以通过填写以下表格要求更改[[Help:Title for the wiki|主页名称]]或者[[Help:Domain name|主页域名]]。请仔细检查您的拼写，确保相关内容和链接无任何错误。我们不会处理多次的更改请求。如果您不是管理员，请您首先联系该维基主页的[[Special:ListAdmins|管理员]]探讨有关更改事宜。",

	'specialcontact-intro-design' => "管理员可以通过维基主页的[[Help:Theme_designer|版面设计]]进行更改。如果您不是该维基主页的管理员但是希望更改版面设计，请首先联系此维基的[[Special:ListAdmins|管理员]]。如果您希望帮助建立一个定制化的主题版面设计，您可以向[[w:Community_Central:Content_Team/Requests|维基内容管理团队]]提交申请。请在提交申请之前仔细阅读相关规定。

如果您在上传维基主页设计的时候遇到了操作故障，请在[[Special:Contact/bug|这里]]向我们提供相关的报告。",
	'specialcontact-intro-features' => "维基网提供了许多的功能，大部分的功能都是默认的。

如果您是维基主页的管理员并且认为某些功能不适合您的维基主页建设，请首先和您的维基社区用户讨论是否有必要关掉这些功能。如果大多数的社区用户都同意作出更改，您可以使用[[Special:AdminDashboard|控制面板]]中的[[Special:WikiFeatures|功能设置]]进行关闭或者开启某些功能。如果某些功能并没有被显示出来，请[[Special:Contact/general|联系我们]]要求作出更改。

如果您对我们正在开发的某些新功能的测试十分感兴趣，可以登陆[[Special:WikiFeatures|功能设置]]实验室进行查询。

如果您想与我们的最新功能保持同步，请访问我们的[[w:c:community:Blog:Wikia_New_Features|员工博客－最新功能]]进行查看。",

	'specialcontact-intro-close-wiki' => "感谢您联系维基！一旦维基主页被建立，我们不会对其进行删除。维基主页是由社区共同拥有，即便您对某个维基主页失去兴趣，其他用户依然可以进行编辑或者被[[Special:Contact/adoption|授权负责]]此维基主页的建设。

如果您希望重新命名您的维基主页，或者修改某些拼写内容以及语法错误，请首先访问[[Help:Rename|重新命名]]主页和[[Help:Theme designer|版面设计]]查看相关内容。一般情况下，维基主页的名称是可以被更改的。如果您希望更改维基主页的域名，请[[Special:Contact/general|发信给我们]]，我们会帮您作出更改。维基主页上的所有内容依然会被保留。

如果您认为这个维基主页不会有其他用户感兴趣，比如说这是有关您自己的维基主页，请通过以下表格提交申请，告诉我们您希望要求关闭的维基主页。

维基网拥有大量不同主题的社区，我们希望您可以通过浏览其他的社区，找到您的兴趣所在。",

	'specialcontact-intro-general' => "您可以填写这个表格联系[[w:project:Staff|维基员工]]，也可以在[[Special:ListAdmins|这里]]查找维基管理员名单。

	如果您还有其他关于维基的问题，可以访问[[w:project:Report_a_problem|这里]]，或者您也可以在[[w:Forum:Index|维基社区论坛]]发帖来获取其他用户的帮助。

如果您希望通过加载附件发邮件的方式联系我们，您可以发信至[mailto:community@wikia.com community@wikia.com]。
",

	/* non-form footer */
	'specialcontact-noform-footer' => "'''这个网页回答了您的问题吗？''' 如果没有，请[[Special:contact/general|联系我们]]获取帮助。您也可以查看我们的'''[[w:c:community:Help:Index|帮助主页]]'''，[[w:c:community:Blog:Wikia_Staff_Blog|员工博客]]或者在'''[[w:c:community:Forum:Community_Central_Forum|社区中心论坛]]'''上发帖寻求帮助。如果您希望寻求管理员的帮助或者建议，请访问[[w:c:community:Admin_Central:Main_Page|管理员中心]]进行查看",

	/* form */
	'specialcontact-username' => '用户名',
	'specialcontact-wikiname' => '所属维基主页',
	'specialcontact-realname' => '姓名',
	'specialcontact-yourmail' => '邮件',
	'specialcontact-problem' => '主题',
	'specialcontact-problemdesc' => '内容',
	'specialcontact-mail' => '发送',
	'specialcontact-filledin' => '自动填写用户设定信息',
	'specialcontact-ccme' => '向我发送此邮件的副本',
	'specialcontact-ccdisabled' => '操作不成功：请[[Special:ConfirmEmail|验证]]您的邮箱',
	'specialcontact-notyou' => '不是您本人？',
	'specialcontact-captchainfo' => '请在图片中插入文字内容',
	'specialcontact-captchatitle' => '字迹模糊',
	'specialcontact-formtitle' => '联系维基社区支持团队',
	'specialcontact-label-screenshot' => '您已经截屏了吗？如果是，请您在这里上传图片',
	'specialcontact-label-additionalscreenshot' => '如果您还有其他截屏图片，请在这里上传',
	'specialcontact-label-bad-ad-description' => '请描述有关广告的具体问题',
	'specialcontact-label-bad-ad-link' => '请提供您浏览不恰当广告的网页链接',
	'specialcontact-label-bug-link' => '请提供出现问题的网页链接',
	'specialcontact-label-bug-feature' => '这个与哪项操作有关？',
	'specialcontact-label-bug-description' => '请具体描述您遇到的问题',
	'specialcontact-label-close-account-confirm' => '我确定要关闭维基帐户',
	'specialcontact-label-close-account-read-help' => '我已经阅读了[[Help:Close_my_account|关闭帐户主页]]',
	'specialcontact-label-account-issue-description' => '请具体描述您所遇到的问题',
	'specialcontact-label-rename-newusername' => '请输入新的用户名称',
	'specialcontact-label-rename-account-confirm' => '我确定新的用户名称输入无误',
	'specialcontact-label-rename-account-read-help' => '我已经阅读了[[Help:Changing your username|更换用户名主页]',
	'specialcontact-form-header' => '联系维基',
	'specialcontact-logged-in-as' => '您作为$1登陆。 [[Special:UserLogout|并非本人？]]',
	'specialcontact-mail-on-file' => '您的邮件被设置为$1。 [[Special:Preferences|您希望更换吗？]]',

	/* errors */
	'specialcontact-nomessage' => '请填写内容',
	'specialcontact-captchafail' =>	'不正确的或缺少确认码。',
	'specialcontact-error-title' => '表格填写有误',
	'specialcontact-error-message' => '提交表格出错。请重新操作。',
	'specialcontact-error-logintext' => '您必须登陆后才可进行这项操作。请[[Special:SignUp|登陆您的帐户]]重新操作。',
	'specialcontact-error-alreadyrenamed' => '您之前已经更改过了用户名，所以您不能再次更改。需要更多帮助，请[[Special:Contact/general|联系我们]]。',

	/* email */
	'specialcontact-mailsub' => '维基社区支持团队',
	'specialcontact-mailsubcc' => '抄送邮件',
	'specialcontact-ccheader' => '抄送邮件给维基社区支持团队',

	/* after */
	'specialcontact-submitcomplete' => '感谢您联系维基网！我们已经收到了您的相关请求，会在72小时之内对您的问题给予答复。

同时，您可以通过[[w:c:community:Forum:Community_Central_Forum|社区论坛]]和[[w:c:community:Help:Index|帮助页]]查看其他信息。您还可以访问维基的[[w:c:community:Blog:Wikia_Staff_Blog|员工博客]]查看最新有关维基的新闻。我们十分感谢您对维基网的支持！',
);

// include "SpecialContact.i18n2.php";
