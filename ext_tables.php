<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Vereinsdatenbank und -karte');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dst14vereine_domain_model_verein', 'EXT:dst14_vereine/Resources/Private/Language/locallang_csh_tx_dst14vereine_domain_model_verein.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dst14vereine_domain_model_verein');
$TCA['tx_dst14vereine_domain_model_verein'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_verein',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,strasse,postfach,p_l_z,ort,land,webseite,email,lat,lng,lv,ansprechpartner,sportarten,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Verein.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dst14vereine_domain_model_verein.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dst14vereine_domain_model_sportarten', 'EXT:dst14_vereine/Resources/Private/Language/locallang_csh_tx_dst14vereine_domain_model_sportarten.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dst14vereine_domain_model_sportarten');
$TCA['tx_dst14vereine_domain_model_sportarten'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_sportarten',
		'label' => 'bezeichnung',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'bezeichnung,fachbereich,fbweb,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Sportarten.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dst14vereine_domain_model_sportarten.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dst14vereine_domain_model_landesverbaende', 'EXT:dst14_vereine/Resources/Private/Language/locallang_csh_tx_dst14vereine_domain_model_landesverbaende.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dst14vereine_domain_model_landesverbaende');
$TCA['tx_dst14vereine_domain_model_landesverbaende'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_landesverbaende',
		'label' => 'namelv',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'namelv,lvweb,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Landesverbaende.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dst14vereine_domain_model_landesverbaende.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dst14vereine_domain_model_ansprechpartner', 'EXT:dst14_vereine/Resources/Private/Language/locallang_csh_tx_dst14vereine_domain_model_ansprechpartner.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dst14vereine_domain_model_ansprechpartner');
$TCA['tx_dst14vereine_domain_model_ansprechpartner'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dst14_vereine/Resources/Private/Language/locallang_db.xlf:tx_dst14vereine_domain_model_ansprechpartner',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,vorname,email,tel,fax,tel2,mobil,bemerkungen,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Ansprechpartner.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dst14vereine_domain_model_ansprechpartner.gif'
	),
);

?>