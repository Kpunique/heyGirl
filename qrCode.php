
<?php
//use composer to download packages first (composer require endroid/qr-code)
require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;



$qr = QrCode::create("https://123ezp.com");
$writer = new PngWriter();
$writer->write($qr)->saveToFile("ezp.PNG");
