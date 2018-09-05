<?php

namespace foTYPE\PhpPresentation\Tests\Writer\PowerPoint2007;

use foTYPE\PhpPresentation\Shape\Comment;
use foTYPE\PhpPresentation\Tests\PhpPresentationTestCase;

class RelationshipsTest extends PhpPresentationTestCase
{
    protected $writerName = 'PowerPoint2007';

    public function testCommentsAuthors()
    {
        $oAuthor = new Comment\Author();
        $oComment = new Comment();
        $oComment->setAuthor($oAuthor);
        $this->oPresentation->getActiveSlide()->addShape($oComment);

        $this->assertZipXmlElementExists('ppt/_rels/presentation.xml.rels', '/Relationships/Relationship[@Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/commentAuthors"]');
    }
}
