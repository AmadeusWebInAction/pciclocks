<?php
$blocks = [
	'home-about' => 'snippet',
	'team' => [
		'start' => [],
		'end' => [],
		'items' => [
			getTeamItem('Subash', 'Founder & Chief Engineer', 'https://www.linkedin.com/in/subash-pciclocks/'),
			getTeamItem('Sabya', 'Promo and Social Media', 'https://www.linkedin.com/in/sabyasachi-dehury-578a29235/'),
			getTeamItem('Imran', 'Webmaster & Content', 'https://www.linkedin.com/in/imran-ali-namazi/'),
		]
	],
	'skills' => 'code-snippet',
	'works' => [
		'start' => ['introduction' => 'With a commitment to craftsmanship, we deliver reliable and elegant timepieces for communities and institutions worldwide.'],
		'end' => [],
		'items' => [
			getWorkItem('Tower Clocks'),
			getWorkItem('Pillar Clocks'),
			getWorkItem('Floral Clocks'),
		]
	],
	
];

foreach ($blocks as $name => $item) {
	if (is_string($item)) {
		echo $item == 'code-snippet' ? getCodeSnippet($name) : getSnippet($name);
		continue;
	}

	$block = getThemeBlock('stunning-' . $name);
	echo replaceItems($block['start'], $item['start'], '%');

	foreach ($item['items'] as $vars)
		echo replaceItems($block['item'], $vars, '%');


	echo replaceItems($block['end'], $item['start'], '%');
}

function getTeamItem($name, $designation, $linkedin) {
	$assets = getHtmlVariable('assets');
	$slug = urlize($name);
	return compact('name', 'slug', 'designation', 'linkedin', 'assets');
}

function getWorkItem($name) {
	$assets = getHtmlVariable('assets');
	$baseurl = getHtmlVariable('page-url');
	$slug = urlize($name);
	return compact('name', 'slug', 'baseurl', 'assets');
}
