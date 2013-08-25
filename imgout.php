<?php
require_once '../piximgen/PixImGen.php';
$imggen = new PixImGen($_POST);
try {
	header('content-type: image/png');
	echo base64_encode($imggen->getImage());
} catch(Exception $e) {
	echo $e->getMessage();
}