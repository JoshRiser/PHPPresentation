<?php
include_once 'Sample_Header.php';

use foTYPE\PhpPresentation\PhpPresentation;
use foTYPE\PhpPresentation\Shape\RichText;

// Create new PHPPresentation object
echo date('H:i:s') . ' Create new PHPPresentation object' . EOL;
$objPHPPresentation = new PhpPresentation();
$objPHPPresentation->removeSlideByIndex(0);

$oReader = \foTYPE\PhpPresentation\IOFactory::createReader('PowerPoint2007');
$oPresentation04 = $oReader->load(__DIR__ . '/results/Sample_04_Table.pptx');

foreach ($oPresentation04->getAllSlides() as $oSlide) {
    $objPHPPresentation->addExternalSlide($oSlide);
}

// Save file
echo write($objPHPPresentation, basename(__FILE__, '.php'), $writers);
if (!CLI) {
    include_once 'Sample_Footer.php';
}