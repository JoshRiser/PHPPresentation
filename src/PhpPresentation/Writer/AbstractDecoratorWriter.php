<?php

namespace foTYPE\PhpPresentation\Writer;

use PhpOffice\Common\Adapter\Zip\ZipInterface;
use foTYPE\PhpPresentation\HashTable;
use foTYPE\PhpPresentation\PhpPresentation;

abstract class AbstractDecoratorWriter
{
    /**
     * @return ZipInterface
     */
    abstract public function render();

    /**
     * @var \foTYPE\PhpPresentation\HashTable
     */
    protected $oHashTable;

    /**
     * @var PhpPresentation
     */
    protected $oPresentation;

    /**
     * @var ZipInterface
     */
    protected $oZip;

    /**
     * @param HashTable $hashTable
     * @return $this
     */
    public function setDrawingHashTable(HashTable $hashTable)
    {
        $this->oHashTable = $hashTable;
        return $this;
    }

    /**
     * @return HashTable
     */
    public function getDrawingHashTable()
    {
        return $this->oHashTable;
    }

    /**
     * @param PhpPresentation $oPresentation
     * @return $this
     */
    public function setPresentation(PhpPresentation $oPresentation)
    {
        $this->oPresentation = $oPresentation;
        return $this;
    }

    /**
     * @return PhpPresentation
     */
    public function getPresentation()
    {
        return $this->oPresentation;
    }

    /**
     * @param ZipInterface $oZip
     * @return $this
     */
    public function setZip(ZipInterface $oZip)
    {
        $this->oZip = $oZip;
        return $this;
    }

    /**
     * @return ZipInterface
     */
    public function getZip()
    {
        return $this->oZip;
    }
}
