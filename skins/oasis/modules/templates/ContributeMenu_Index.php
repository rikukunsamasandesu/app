<?php

// render "Contribute" menu
echo F::app()->renderView('MenuButton', 'Index', array(
	'action' => array(
		'text' => wfMessage('oasis-button-contribute-tooltip'),
	),
	'class' => 'contribute secondary',
	'image' => MenuButtonController::CONTRIBUTE_ICON,
	'dropdown' => $dropdownItems,
));
