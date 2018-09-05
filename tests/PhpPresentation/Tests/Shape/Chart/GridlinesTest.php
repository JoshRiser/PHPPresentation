<?php

namespace foTYPE\PhpPresentation\Tests\Shape\Chart;

use foTYPE\PhpPresentation\Shape\Chart\Gridlines;
use PHPUnit\Framework\TestCase;

class GridlinesTest extends TestCase
{
    public function testConstruct()
    {
        $object = new Gridlines();

        $this->assertInstanceOf('foTYPE\PhpPresentation\Style\Outline', $object->getOutline());
    }

    public function testGetSetOutline()
    {
        $object = new Gridlines();

        $oStub = $this->getMockBuilder('foTYPE\PhpPresentation\Style\Outline')->getMock();

        $this->assertInstanceOf('foTYPE\PhpPresentation\Style\Outline', $object->getOutline());
        $this->assertInstanceOf('foTYPE\PhpPresentation\Shape\Chart\Gridlines', $object->setOutline($oStub));
        $this->assertInstanceOf('foTYPE\PhpPresentation\Style\Outline', $object->getOutline());
    }
}
