<?php

$wgExtensionCredits['parserhook'][] = array(
	'name' => 'MobileDetect',
	'version' => 2.0,
	'license-name' => 'GPL-2.0-or-later',
	'descriptionmsg' => 'mobiledetect-desc',
	'author' => array( 'Matthew Tran', 'Luis Felipe Schenone' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:MobileDetect',
);

$wgMessagesDirs['MobileDetect'] = __DIR__ . '/i18n';

$wgAutoloadClasses['MobileDetect'] = __DIR__ . '/MobileDetect.body.php';

$wgHooks['BeforePageDisplay'][] = 'MobileDetect::addModule';
$wgHooks['ParserFirstCallInit'][] = 'MobileDetect::setParserHook';

$wgResourceModules['ext.MobileDetect'] = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'MobileDetect',
);
if ( MobileDetect::isMobile() ) {
	$wgResourceModules['ext.MobileDetect']['styles'] = 'MobileDetect.mobileonly.css';
} else {
	$wgResourceModules['ext.MobileDetect']['styles'] = 'MobileDetect.nomobile.css';
}

// Backwards compatibility
function mobiledetect() {
	return MobileDetect::isMobile();
}