<?php
namespace thekonz\PixImGenGui;
require_once '../piximgen/PixImGen.php';
$imggen = new \thekonz\PixImGen($_POST);
header('content-type: image/png');
echo base64_encode($imggen->getImage());
