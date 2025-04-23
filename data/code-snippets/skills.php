<?php
//https://icons.getbootstrap.com/	
$items = [
	['title' => 'Masterful Design Aesthetics', 'link' => 'design', 'iconclass' => 'bi bi-droplet-half',
		'content' => 'The ability to create visually stunning and contemporary designs that complement the intended environment and become architectural highlights.'],

	['title' => 'Precision and Reliability', 'link' => 'engineering', 'iconclass' => 'bi bi-compass',
		'content' => 'Expertise in developing and integrating mechanical movements with GPS synchronization to ensure accurate and dependable timekeeping.'],

	['title' => 'Material Expertise', 'link' => 'engineering', 'iconclass' => 'bi bi-box-seam',
		'content' => 'Knowledge in recommending and utilizing durable, weather-resistant materials suitable for outdoor installations and longevity.'],

	['title' => 'Customization and Flexibility', 'link' => 'design', 'iconclass' => 'bi bi-asterisk',
		'content' => 'The capacity to tailor designs and functionalities to meet specific client requirements and site conditions.'],

	['title' => 'End-to-End Project Management', 'link' => 'engineering', 'iconclass' => 'bi bi-award',
		'content' => 'Proven capability in handling all stages from initial design and fabrication to final installation and commissioning.'],

	['title' => 'Technical Proficiency', 'link' => 'engineering', 'iconclass' => 'bi bi-backpack4',
		'content' => 'Demonstrated hands-on experience in embedded system development, control unit programming, and seamless GPS receiver integration.'],
];

$block = getThemeBlock('skills');

contentBox('skills', 'container');
echo replaceItems($block['start'], ['block-title' => 'We are Renowned for'], '%');

$base = variable('node') . '/' . variable('page_parameter1') . '/';

foreach ($items as $item) {
	$item['link'] = pageUrl($item['link']);
	echo replaceItems($block['item'], $item, '%');
}

echo $block['end'];
contentBox('end');
