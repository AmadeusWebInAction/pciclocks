<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('SITEPATH', __DIR__);
include_once '../../awe/core/framework/1-entry.php';

variables([
	'use-site-static' => true,
	'not-a-network' => true,
	'theme1' => 'canvas',
	'sub-theme1' => 'flip',
	'social' => [
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/company/pciclocks/', 'name' => 'PCI Clocks' ],
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/subash-pciclocks/', 'name' => 'Founder Subash' ],
		[ 'type' => 'youtube', 'url' => 'https://www.youtube.com/@pciclocks', 'name' => 'PCI Clocks' ],
	]
]);

runFrameworkFile('site');
