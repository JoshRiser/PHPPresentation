<?php

namespace foTYPE\PhpPresentation\Slide\Background;

use foTYPE\PhpPresentation\Slide\AbstractBackground;
use foTYPE\PhpPresentation\Style\SchemeColor as StyleSchemeColor;

class SchemeColor extends AbstractBackground
{
    /**
     * @var StyleSchemeColor
     */
    protected $schemeColor;

    /**
     * @param StyleSchemeColor|null $color
     * @return $this
     */
    public function setSchemeColor(StyleSchemeColor $color = null)
    {
        $this->schemeColor = $color;
        return $this;
    }

    /**
     * @return StyleSchemeColor
     */
    public function getSchemeColor()
    {
        return $this->schemeColor;
    }
}
