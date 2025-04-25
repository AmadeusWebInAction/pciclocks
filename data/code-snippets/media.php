<?php
$fol = 'engineering/';
$link = pageUrl('enquiry');
$linkText = 'Get More Details';

if (variable('node') == 'design') {
	$items = [
		['image' => $fol . 'de-1a-dial-fabrication.jpg', 'backImage' => $fol . 'de-1b-design-printing.jpg',
			'title' => 'dial-fabrication', 'subtitle' => 'design-printing',
			'link' => $link, 'linkText' => $linkText,
			'content' => 'Revolutionary commercial grade printing.'],
		['image' => $fol . 'de-3a-packed-hands.jpg', 'backImage' => $fol . 'de-3b-clock-hands.jpg',
			'title' => 'packed-hands', 'subtitle' => 'clock-hands',
			'link' => $link, 'linkText' => $linkText,
			'content' => 'Aluminum sheet <abbr title="computer numeric control">CNC</abbr> cut & <abbr title="poly urethane">PU</abbr> painted.'],
		['image' => $fol . 'de-5a-floral-clock-20feet.jpg', 'backImage' => $fol . 'de-5b-floral-clock-movement.jpg',
			'title' => 'floral-clock-20feet', 'subtitle' => 'floral-clock-movement',
			'link' => $link, 'linkText' => $linkText,
			'content' => 'Botanical Landscape.'],
	];
} else {
	$items = [
		['image' => $fol . '2a-cast-aluminum.jpg', 'backImage' => $fol . '2b-material-handling.jpg',
			'title' => 'skeleton dial', 'subtitle' => 'material-handling',
			'link' => $link, 'linkText' => $linkText,
			'content' => 'Cast Aluminum'],
		['image' => $fol . '4a-dials.jpg', 'backImage' => $fol . '4b-dial-control.jpg',
			'title' => 'intricate-dials', 'subtitle' => 'dial-control',
			'link' => $link, 'linkText' => $linkText,
			'content' => 'Cast Acrylic / Backlit'],
		['image' => $fol . '6a-dial-with-movement.jpg', 'backImage' => $fol . '6b-master-controller.jpg',
			'title' => 'dial-with-movement', 'subtitle' => 'master-controller',
			'link' => $link, 'linkText' => $linkText,
			'content' => 'GPS Controller'],
	];
}

//based on flip-cards.html
$block = getThemeBlock('media', SITEPATH . '/data/');

$op = [];
$op[] = replaceItems($block['start'], ['heading' => 'Engineering / Design'], '%');

foreach ($items as $item) {
	$item['title'] = humanize($item['title']);
	$item['subtitle'] = humanize($item['subtitle']);

	//$item['content'] = returnLinesNoParas($item['content']);

	$op[] = replaceItems($block['item'], $item, '%');
	$op[] = ''; $op[] = '';
}

$op[] = $block['end'];

return implode(NEWLINE, $op);
