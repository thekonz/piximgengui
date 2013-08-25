<?php
require_once '../piximgen/PixImGen.php';
$imggen = new PixImGen($_POST);
try {
	header('content-type: image/png');
	echo $imggen->getImage();
	// print_r($imggen->settings);
} catch(Exception $e) {
	echo $e->getMessage();
}