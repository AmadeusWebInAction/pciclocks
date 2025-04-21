<?php   
$items = [
	[
		'sno' => '1',
		'title' => 'Masterful Design Aesthetics',
		'image' => 'assets/home/1.jpg',
		'thumbnail' => 'assets/home/thumbnails/1.jpg',
		'detail' => 'Know More',
		'content' => '### Outdoor Tower Clocks

**Specifications**:

* Clock diameter : 4 feet	
* Analog / Open Dial
* GPS Synchronized
* Cast Aluminum Open Dial
* Works on 230Volt (Ac +/-10%)
* Battery back-up- 12 Hrs built-in self battery charger
* Weatherproof: yes

Cost range- from Rs 60,000/- onwards.<br>

[Request a Quote / Callback](%url%outdoor-clocks/#engage-quote).'
		],

	[
		'sno' => '2',
		'title' => 'Masterful Design Aesthetics',
		'image' => 'assets/home/2.jpg',
		'thumbnail' => 'assets/home/thumbnails/2.jpg',
		'detail' => 'Know More',
		'content' => '### Pillar Clocks

**Specifications**:

* Clock diameter : 3 feet	
* Analog / Open Dial
* GPS Synchronized
* Cast Acrylic Open Dial
* Works on 230Volt (Ac +/-10%)
* Battery back-up- 12 Hrs built-in self battery charger
* Weatherproof: yes

Cost range- from Rs 1,20,000/- onwards.<br>

[Request a Quote / Callback](%url%outdoor-clocks/#engage-quote).'		],

	[
		'sno' => '3',
		'title' => 'Masterful Design Aesthetics',
		'image' => 'assets/home/3.jpg',
		'thumbnail' => 'assets/home/thumbnails/3.jpg',
		'detail' => 'Know More',
		'content' => '### Floral Clocks

**Specifications**:

* Clock diameter : 15 feet	
* Analog / Open Dial
* GPS Synchronized
* Botanical Garden
* Works on 230Volt (Ac +/-10%)
* Battery back-up- 12 Hrs built-in self battery charger
* Weatherproof: yes

Cost range- from Rs 60,000/- onwards.<br>

[Request a Quote / Callback](%url%outdoor-clocks/#engage-quote).'		],

	[
		'sno' => '4',
		'title' => 'Masterful Design Aesthetics',
		'image' => 'assets/home/4.jpg',
		'thumbnail' => 'assets/home/thumbnails/4.jpg',
		'detail' => 'Know More',
		'content' => '### FRP Clocks Tower

**Specifications**:

* Clock diameter : 5 feet	
* Analog / Open Dial
* GPS Synchronized
* Fiber Glass structure Tower
* Works on 230Volt (Ac +/-10%)
* Battery back-up- 12 Hrs built-in self battery charger
* Weatherproof: yes

Cost range- from Rs 30,00,000/- onwards.<br>

[Request a Quote / Callback](%url%outdoor-clocks/#engage-quote).'		],

	[
		'sno' => '5',
		'title' => 'Masterful Design Aesthetics',
		'image' => 'assets/home/5.jpg',
		'thumbnail' => 'assets/home/thumbnails/5.jpg',
		'detail' => 'Know More',
		'content' => '### Antique Tower Clocks

**Specifications**:

	
* Clock diameter : 4 feet
* Analog / Open Dial	
* GPS Synchronized
* Cast Aluminum Open Dial
* Works on 230Volt (Ac +/-10%)
* Battery back-up- 12 Hrs built-in self battery charger
* Weatherproof: yes

Cost range- from Rs 60,000/- onwards.<br>

[Request a Quote / Callback](%url%outdoor-clocks/#engage-quote).'		],

	[
		'sno' => '6',
		'title' => 'Masterful Design Aesthetics',
		'image' => 'assets/home/6.jpg',
		'thumbnail' => 'assets/home/thumbnails/6.jpg',
		'detail' => 'Know More',
		'content' => '### Analog Tower Clocks

**Specifications**:

* Analog / Open Dial	
* GPS Synchronized
* Cast Aluminum Open Dial
* Works on 230Volt (Ac +/-10%)
* Battery back-up- 12 Hrs built-in self battery charger
* Weatherproof: yes

Cost range- from Rs 60,000/- onwards.<br>

[Request a Quote / Callback](%url%outdoor-clocks/#engage-quote).'		],

	[
		'sno' => '7',
		'title' => 'Masterful Design Aesthetics',
		'image' => 'assets/home/7.jpg',
		'thumbnail' => 'assets/home/thumbnails/7.jpg',
		'detail' => 'Details of [Clock7]',
		'content' => '### Garden Clocks

**Specifications**:

* Clock diameter : 15 feet	
* Analog / Open Dial	
* GPS Synchronized
* Works on 230Volt (Ac +/-10%)
* Battery back-up- 12 Hrs built-in self battery charger
* Weatherproof: yes

Cost range- from Rs 1,50,000/- onwards.<br>

[Request a Quote / Callback](%url%outdoor-clocks/#engage-quote).'		],

	];

$block = getThemeBlock('rev-slider', SITEPATH . '/data/');

$op = [];
$op[] = $block['start'];

foreach ($items as $item) {
	$item['image'] = fileUrl($item['image']);
	$item['thumbnail'] = fileUrl($item['thumbnail']);

	$item['content'] = returnLinesNoParas($item['content']);

	$op[] = replaceItems($block['item'], $item, '%');
	$op[] = ''; $op[] = '';
}

$op[] = $block['end'];

return implode(NEWLINE, $op);
