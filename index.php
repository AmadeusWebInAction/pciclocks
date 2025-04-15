<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('SITEPATH', __DIR__);
include_once '../../awe/core/framework/1-entry.php';

addStyle('site');

variables([
	'google-analytics' => 'G-NQ65KWGP4F',
	'ChatraID' => 'qZZNzKEy2t388Fcvf',
	'sections-have-files' => true,
	'use-site-static' => true,
	'not-a-network' => true,
	'theme' => 'canvas',
	'sub-theme' => 'flip',
	'footer-variation' => '-single-widget',
	'no-page-menu' => true,
	'address-url' => $addressLink = 'https://maps.app.goo.gl/zer8pJdfcKxxQByU9',
	'social' => [
//		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/company/pciclocks/', 'name' => 'PCI Clocks' ],
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/subash-pciclocks/', 'name' => 'Dehury' ],
//		[ 'type' => 'youtube', 'url' => 'https://www.youtube.com/@pciclocks', 'name' => 'PCI Clocks' ],
		[ 'type' => 'fa fa-home text-bg-warning', 'url' => $addressLink, 'name' => 'Workshop' ],
	]
]);

function site_before_render() {
	$node = variable('node');
	if ($node == 'index') setSubTheme('stunning');
}


function enrichThemeVars($vars, $what) {
	if ($what == 'header') {
		if (variable('node') == 'index') {
			$vars['optional-slider'] = getSnippet('home-slider');
			return $vars;
		}

		$file = 'big-ben';
		$node = variable('node');

		if (in_array($node, ['tower-clocks']))
			$file = 'towerdial';

		$slider = getSnippet('page-title');
		$slider = replaceItems($slider, ['filename' => $file], '%');

		$vars['optional-slider'] = $slider;

		$vars['breadcrumbs'] = getBreadcrumbs([
			'%url%' => variable('name') . ' (Home)',
			'%url%catalogue/' => 'Catalogue',
			'%url%make-an-enquiry/' => 'Make an Enquiry',
		]);
	}
	return $vars;
}

runFrameworkFile('site');
