<?php

/**
 * Backwards compatibility
 * Allow to use from LocalSettings.php
 *
 * @return bool
 */
function wfMobileDetect() {
	return MediaWiki\Extension\MobileDetect\Hooks::isMobile();
}
