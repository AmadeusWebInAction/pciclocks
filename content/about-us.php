<?php
/*
1 - https://canvastemplate.com/rs-demo-premium-food-carousel.html
	images shortlisted
2 - 

*/
$blocks = [
	'about-intro' => 'snippet',
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
];

foreach ($blocks as $name => $item) {
	if (is_string($item)) {
		if ($item == 'code-snippet') getCodeSnippet($name); else echo getSnippet($name);
		continue;
	}

	$block = getThemeBlock('stunning-' . $name);
	echo replaceItems($block['start'], $item['start'], '%');

	foreach ($item['items'] as $vars)
		echo replaceItems($block['item'], $vars, '%');


	echo replaceItems($block['end'], $item['end'], '%');
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
