<?php
require_once '../piximgen/PixImGen.php';
$imggen = new PixImGen($_POST);
header('content-type: image/png');
echo base64_encode($imggen->getImage());
// print_r($imggen->settings);