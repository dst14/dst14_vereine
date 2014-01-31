<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_dst14vereine_domain_model_ansprechpartner'] = array(
	'ctrl' => $TCA['tx_dst14vereine_domain_model_ansprechpartner']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, vorname, email, tel, fax, tel2, mobil, bemerkungen',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, vorname, email, tel, fax, tel2, mobil, bemerkungen,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
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
				'foreign_table' => 'tx_dst14vereine_domain_model_ansprechpartner',
				'foreign_table_where' => 'AND tx_dst14vereine_domain_model_ansprechpartner.pid=###CURRENT_PID### AND tx_dst14vereine_domain_model_ansprechpartner.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_ansprechpartner.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'vorname' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_ansprechpartner.vorname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'email' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_ansprechpartner.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'tel' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_ansprechpartner.tel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'fax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_ansprechpartner.fax',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'tel2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_ansprechpartner.tel2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mobil' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_ansprechpartner.mobil',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bemerkungen' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_ansprechpartner.bemerkungen',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'verein' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

?>