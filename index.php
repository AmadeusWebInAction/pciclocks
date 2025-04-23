<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

define('SITEPATH', __DIR__);
include_once '../../awe/core/framework/1-entry.php';

variables([
	'google-analytics' => 'G-NQ65KWGP4F',
	'ChatraID' => 'qZZNzKEy2t388Fcvf',
	'sections-have-files' => true,
	'use-site-static' => true,
	'not-a-network' => true,
	'theme' => 'canvas',
	'sub-theme' => 'flip',
	'footer-variation' => '-large-message',
	'no-page-menu' => true,
	'link-to-site-home' => true,
	'dont-show-current-menu' => true,
	'address-url' => $addressLink = 'https://maps.app.goo.gl/zer8pJdfcKxxQByU9',
	'defaultSeoDescription' => 'Best Manufacturer under MSME | Tower Clocks GPS synchronized.',
	'defaultSeoKeywords' => 'tower clocks,outdoor clocks,pillar clocks,clocks in india,custom design clocks'
]);

function _set_social() {
	$text = 'enquiry+to+PCI+Clocks...';
	variable('social', [
		[ 'type' => 'whatsapp', 'url' => replaceHtml('%whatsapp%') . $text, 'name' => 'WhatsApp Us' ],
		[ 'type' => 'text-bg-success bi-telephone-forward', 'url' => 'tel:' . variable('phone'), 'name' => 'Call Us' ],
		[ 'type' => 'fa-solid text-bg-primary fa-mail-bulk', 'url' => replaceHtml('mailto:%email%?subject=') . $text, 'name' => 'Email Us' ],
//		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/company/pciclocks/', 'name' => 'PCI Clocks' ],
		[ 'type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/subash-pciclocks/', 'name' => 'Dehury' ],
//		[ 'type' => 'youtube', 'url' => 'https://www.youtube.com/@pciclocks', 'name' => 'PCI Clocks' ],
		[ 'type' => 'icon-2x text-bg-warning uil uil-map-marker', 'url' => variable('address-url'), 'name' => 'Workshop Location' ],
	]);
}

function site_before_render() {
	_set_social();
	addStyle('site');
	runFeature('engage'); //needed for floating button

	variable('og:image', fileUrl('assets/pciclocks-opengraph.jpg'));
	$node = variable('node');
	if ($node == 'index') setSubTheme('stunning');
	if ($node == 'index') {
		variable('custom-title', 'Best Manufacturer under MSME | GPS based Outdoor Clocks. Precision Clocks & Industries[PCI Clocks] Company under MSME Certified. Starting cost range from - Rs 1,20,000');
		variables([
			'description' => variable('defaultSeoDescription'),
			'keywords' => variable('defaultSeoKeywords'),
			'seo-handled' => true,
		]);
	}
}

function after_file() {
	contentBox('enquiry', 'container after-content text-center');
	h2('Make an Enquiry');
	echo '<a class="btn btn-primary" href="https://forms.gle/aQ2RfWVAfAN2t6XK7" target="_blank">Receive Quotation within 24 hours</a>';
	contentBox('end');
}

function after_footer_assets() {
	$node = variable('node');
	if ($node == 'index') {
		echo replaceItems(getThemeSnippet('rs-plugin-footer'), [
			'delay:9000' => 'delay:2000',
		]);
	}
	echo getThemeSnippet('floating-button');
}

function enrichThemeVars($vars, $what) {
	if ($what == 'header') {
		if (variable('node') == 'index') {
			$vars['optional-slider'] = getCodeSnippet('home-slider');
			return $vars;
		}

		$file = 'big-ben';

		$slider = getSnippet('page-title');
		$slider = replaceItems($slider, ['filename' => $file], '%');

		$vars['optional-slider'] = $slider;

		$vars['breadcrumbs'] = getBreadcrumbs([
			'%url%' => 'Home',
			'%url%catalogue/' => 'Catalogue',
			'%url%make-an-enquiry/' => 'Make an Enquiry',
		]);
	}
	return $vars;
}

runFrameworkFile('site');
