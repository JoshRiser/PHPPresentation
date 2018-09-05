<?php

namespace PhpPresentation\Tests\Writer\PowerPoint2007;

use foTYPE\PhpPresentation\Tests\PhpPresentationTestCase;

class PptPresentationTest extends PhpPresentationTestCase
{
    protected $writerName = 'PowerPoint2007';

    public function testRender()
    {
        $this->assertZipFileExists('ppt/presentation.xml');
    }
}
