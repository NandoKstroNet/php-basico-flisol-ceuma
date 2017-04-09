<?php 

$products = require __DIR__ . '/data/db.php';

$uri = $_SERVER['REQUEST_URI'];

$uri = explode('/', substr($uri, 1));


if(!isset($uri[0])) {

}

if($uri[0] == '') {
	require __DIR__ . '/views/index.phtml';
}

if($uri[0] == 'produto') {
	$id = isset($uri[1]) ? $uri[1] : null;

	$product = array_filter($products, function($p) use ($id){
		return $p['id'] == $id;
	});

	foreach ($product as $product) {}

	require __DIR__ . '/views/single.phtml';
}


