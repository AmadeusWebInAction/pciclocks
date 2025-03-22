<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('SITEPATH', __DIR__);
include_once '../../awe/core/framework/1-entry.php';

variables([
	'phone' => '+91-9853860155',
	'email' => 'precisionclocks@gmail.com',
	'whatsapp' => '919940226317',

	'sections-have-files' => true,
	'use-site-static' => true,
	'not-a-network' => true,
	'theme' => 'canvas',
	'sub-theme' => 'flip',
	'social' => [
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/company/pciclocks/', 'name' => 'PCI Clocks' ],
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/subash-pciclocks/', 'name' => 'Founder Subash' ],
		[ 'type' => 'youtube', 'url' => 'https://www.youtube.com/@pciclocks', 'name' => 'PCI Clocks' ],
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
