<?php

namespace foTYPE\PhpPresentation\Shape\Drawing;

use foTYPE\PhpPresentation\Shape\AbstractGraphic;

abstract class AbstractDrawingAdapter extends AbstractGraphic
{
    /**
     * @return string
     */
    abstract public function getContents();

    /**
     * @return string
     */
    abstract public function getExtension();

    /**
     * @return string
     */
    abstract public function getIndexedFilename();

    /**
     * @return string
     */
    abstract public function getMimeType();
}
