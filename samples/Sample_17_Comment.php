<?php

include_once 'Sample_Header.php';

use foTYPE\PhpPresentation\PhpPresentation;
use foTYPE\PhpPresentation\Slide\Background\Color;
use foTYPE\PhpPresentation\Style\Color as StyleColor;
use \foTYPE\PhpPresentation\Slide\Background\Image;

// Create new PHPPresentation object
echo date('H:i:s') . ' Create new PHPPresentation object' . EOL;
$objPHPPresentation = new PhpPresentation();

// Create slide
echo date('H:i:s') . ' Create slide'.EOL;
$oSlide1 = $objPHPPresentation->getActiveSlide();
$oSlide1->addShape(clone $oShapeDrawing);
$oSlide1->addShape(clone $oShapeRichText);

$oAuthor = new \foTYPE\PhpPresentation\Shape\Comment\Author();
$oAuthor->setName('Progi1984');
$oAuthor->setInitials('P');

// Add Comment 1
echo date('H:i:s') . ' Add Comment 1'.EOL;
$oComment1 = new \foTYPE\PhpPresentation\Shape\Comment();
$oComment1->setText('Text A');
$oComment1->setOffsetX(10);
$oComment1->setOffsetY(55);
$oComment1->setDate(time());
$oComment1->setAuthor($oAuthor);
$oSlide1->addShape($oComment1);

// Add Comment
echo date('H:i:s') . ' Add Comment 2'.EOL;
$oComment2 = new \foTYPE\PhpPresentation\Shape\Comment();
$oComment2->setText('Text B');
$oComment2->setOffsetX(170);
$oComment2->setOffsetY(180);
$oComment2->setDate(time());
$oComment2->setAuthor($oAuthor);
$oSlide1->addShape($oComment2);

// Save file
echo write($objPHPPresentation, basename(__FILE__, '.php'), $writers);
if (!CLI) {
    include_once 'Sample_Footer.php';
}
