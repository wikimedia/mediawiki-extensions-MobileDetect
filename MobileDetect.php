<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'MobileDetect' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['MobileDetect'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the MobileDetect extension. ' .
		'Please use wfLoadExtension() instead, ' .
		'see https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:Extension_registration for more details.'
	);

	return;
} else {
	die( 'This version of the MobileDetect extension requires MediaWiki 1.35+' );
}
