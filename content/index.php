<?php
/*
GET QUOTAIION
	i> NEED HELP CALL 
	i> WHATSAPP
*/
$blocks = [
	'home-about' => 'snippet',
	'works' => [
		'start' => ['introduction' => getSnippet('clock-widget') . 'With a commitment to craftsmanship, we deliver reliable and elegant timepieces for communities and institutions worldwide.'],
		'end' => ['morelink' => pageUrl('catalogue')],
		'items' => [
			getWorkItem('Tower Clocks'),
			getWorkItem('Pillar Clocks'),
			getWorkItem('Floral Clocks'),
		]
	],
	
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

contentBox('engineering', 'container');
renderExcerpt(SITEPATH . '/articles/engineering/home.md', pageUrl('engineering'));
contentBox('end');

contentBox('journey', 'container');
renderExcerpt(SITEPATH . '/articles/our-journey/home.md', pageUrl('our-journey'));
contentBox('end');

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
