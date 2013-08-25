<?php
/**
 * - Inlude composer autoloader
 * - Create a new instance of the PixImGen and set the settings
 *  - Echo the Image base64 encoded
 */
require_once 'vendor/autoload.php';
$imggen = new \thekonz\PixImGen($_POST);
echo base64_encode($imggen->getImage());
