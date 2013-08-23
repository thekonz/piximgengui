<?php
require_once '../imggen/PixImGen.php';
$imggen = new PixImGen($_POST);
// header('content-type: image/png');
// echo base64_encode($imggen->getImage());
echo $imggen->settings