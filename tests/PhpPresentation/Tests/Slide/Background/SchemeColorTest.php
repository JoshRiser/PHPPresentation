<?php

namespace foTYPE\PhpPresentation\Tests\Slide\Background;

use foTYPE\PhpPresentation\Slide\Background\SchemeColor;
use foTYPE\PhpPresentation\Style\SchemeColor as StyleSchemeColor;
use PHPUnit\Framework\TestCase;

class SchemeColorTest extends TestCase
{
    public function testBasic()
    {
        $oStyle = new StyleSchemeColor();

        $object = new SchemeColor();

        $this->assertNull($object->getSchemeColor());

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Slide\\Background\\SchemeColor', $object->setSchemeColor($oStyle));
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\SchemeColor', $object->getSchemeColor());

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Slide\\Background\\SchemeColor', $object->setSchemeColor());
        $this->assertNull($object->getSchemeColor());
    }
}
