<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('SITEPATH', __DIR__);
include_once '../../awe/core/framework/1-entry.php';

variables([
	'sections-have-files' => true,
	'use-site-static' => true,
	'not-a-network' => true,
	'theme' => 'canvas',
	'sub-theme' => 'flip',
	'no-page-menu' => true,
	'social' => [
//		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/company/pciclocks/', 'name' => 'PCI Clocks' ],
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/subash-pciclocks/', 'name' => 'Dehury' ],
//		[ 'type' => 'youtube', 'url' => 'https://www.youtube.com/@pciclocks', 'name' => 'PCI Clocks' ],
		[ 'type' => 'xx fa-map-location', 'url' => 'https://www.google.co.in/maps/place/Precision+Clocks+%26+Industries/@20.8505093,85.1069155,19z/data=!4m6!3m5!1s0x3a18b1fad1b6d305:0xd7e7d2299c45c248!8m2!3d20.8508711!4d85.10758!16s%2Fg%2F11fkdxlw02?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoJLDEwMjExNDUzSAFQAw%3D%3D', 'name' => 'Workshop' ],
	]
]);

function enrichThemeVars($vars, $what) {
	if ($what == 'header') {
		$vars['optional-slider'] = getSnippet('page-title');
		$vars['header-align'] = ' float-end';
	}
	return $vars;
}

runFrameworkFile('site');
