<?php
require_once '../piximgen/PixImGen.php';
$imggen = new PixImGen($_POST);
//header('content-type: image/png');
echo $imggen->getImage();
// print_r($imggen->settings);