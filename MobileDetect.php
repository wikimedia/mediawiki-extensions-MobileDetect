<?php

$wgExtensionCredits['parserhook'][] = array(
	'name' => 'MobileDetect',
	'version' => 2.0,
	'license-name' => 'GPL-2.0+',
	'descriptionmsg' => 'mobiledetect-desc',
	'author' => array( 'Matthew Tran', 'Luis Felipe Schenone' ),
	'url' => 'http://www.mediawiki.org/wiki/Extension:MobileDetect',
);

$wgExtensionMessagesFiles['MobileDetect'] = __DIR__ . '/MobileDetect.i18n.php';
$wgMessagesDirs['MobileDetect'] = __DIR__ . '/i18n';

$wgAutoloadClasses['MobileDetect'] = __DIR__ . '/MobileDetect.body.php';

$wgHooks['ParserFirstCallInit'][] = 'MobileDetect::setParserHook';

// Backwards compatibility
function mobiledetect() {
	return MobileDetect::isMobile();
}