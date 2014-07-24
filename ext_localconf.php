<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'DanielStange.' . $_EXTKEY,
	'Vereine',
	array(
		'Verein' => 'list, show, new, create, edit, update, delete',
		'Sportarten' => 'list, show, new, create, edit, update, delete',
		'Landesverbaende' => 'list, show, new, create, edit, update, delete',
		'Ansprechpartner' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Verein' => 'create, update, delete',
		'Sportarten' => 'create, update, delete',
		'Landesverbaende' => 'create, update, delete',
		'Ansprechpartner' => 'create, update, delete',
		
	)
);
