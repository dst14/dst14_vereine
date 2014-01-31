<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_dst14vereine_domain_model_verein'] = array(
	'ctrl' => $TCA['tx_dst14vereine_domain_model_verein']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, strasse, postfach, p_l_z, ort, land, webseite, email, lat, lng, lv, ansprechpartner, sportarten',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, strasse, postfach, p_l_z, ort, land, webseite, email, lat, lng, lv, ansprechpartner, sportarten,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_dst14vereine_domain_model_verein',
				'foreign_table_where' => 'AND tx_dst14vereine_domain_model_verein.pid=###CURRENT_PID### AND tx_dst14vereine_domain_model_verein.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'strasse' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.strasse',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'postfach' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.postfach',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'p_l_z' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.p_l_z',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'ort' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.ort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'land' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.land',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'webseite' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.webseite',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'email' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'lat' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.lat',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'lng' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.lng',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'lv' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.lv',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_dst14vereine_domain_model_landesverbaende',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'ansprechpartner' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.ansprechpartner',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_dst14vereine_domain_model_ansprechpartner',
				'foreign_field' => 'verein',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'sportarten' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein.sportarten',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_dst14vereine_domain_model_sportarten',
				'MM' => 'tx_dst14vereine_verein_sportarten_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_dst14vereine_domain_model_sportarten',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);

?>