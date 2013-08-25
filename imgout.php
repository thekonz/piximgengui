<?php
require_once 'vendor/autoload.php';
$imggen = new \thekonz\PixImGen($_POST);
header('content-type: image/png');
echo base64_encode($imggen->getImage());
