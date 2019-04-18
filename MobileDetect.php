<?php

$wgExtensionCredits['parserhook'][] = [
	'name' => 'MobileDetect',
	'version' => '2.1',
	'license-name' => 'GPL-3.0-only',
	'descriptionmsg' => 'mobiledetect-desc',
	'author' => [
		'Matthew Tran',
		'[https://mediawiki.org/wiki/User:Sophivorus Felipe Schenone]'
	],
	'url' => 'https://www.mediawiki.org/wiki/Extension:MobileDetect',
];

$wgMessagesDirs['MobileDetect'] = __DIR__ . '/i18n';

$wgAutoloadClasses['MobileDetect'] = __DIR__ . '/MobileDetect.body.php';

$wgHooks['BeforePageDisplay'][] = 'MobileDetect::addModule';
$wgHooks['ParserFirstCallInit'][] = 'MobileDetect::setParserHook';

$wgResourceModules['ext.MobileDetect.mobileonly'] = [
	'styles' => 'MobileDetect.mobileonly.css',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'MobileDetect',
];

$wgResourceModules['ext.MobileDetect.nomobile'] = [
	'styles' => 'MobileDetect.nomobile.css',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'MobileDetect',
];

/**
 * Backwards compatibility
 * When updating to extension registration (extension.json)
 * this function cannot be defined in such a way
 * that it can be used in LocalSettings.php
 * because of this limitation
 * we still use the old registration method :-(
 */
function mobiledetect() {
	return MobileDetect::isMobile();
}