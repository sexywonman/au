<?php


$addresses = [
	
	'https://aoemgd.faiiryloves.com/?utm_source=da57dc555e50572d&ban=banner&j5=1&j6=1&s1=198903&s2=2120605&s3=X&s5=X2&click_id=Opps ',
	'https://wq7prrr.bestmatchesdates.com/c3kw7cc?m=1&s1=Come&cid=Xx',
	'https://aoemgd.goyouniight.com/?utm_source=da57dc555e50572d&ban=other&j5=1&j6=1&s1=198903&s2=2125002&s3=Master&s5=MasterX2&click_id=Xv69',
	'https://wq7prrr.bestmatchesdates.com/c3kw7cc?m=1&s1=Come&cid=Xx',
	'https://aoemgd.unfamiiliardate.net/?utm_source=da57dc555e50572d&ban=other&j5=1&j6=1&s1=198903&s2=2110003&s3=marco&s5=marco&click_id=or-Marco',
	'https://paysale.g2afse.com/click?pid=23710&offer_id=10048&ref_id=xxx',
	'https://wq7prrr.bestmatchesdates.com/c3kw7cc?m=1&s1=Come&cid=Xx',
	'https://paysale.g2afse.com/click?pid=23710&offer_id=7852&ref_id=xx',

	'https://paysale.g2afse.com/click?pid=23710&offer_id=9918&ref_id=XX',
	'https://paysale.g2afse.com/click?pid=23710&offer_id=10031&ref_id=xx'
	
	
	
];

$size = count($addresses);
$randomIndex = rand(0, $size - 1);
$randomUrl = $addresses[$randomIndex];

header('Location: ' . $randomUrl, true, 303);
