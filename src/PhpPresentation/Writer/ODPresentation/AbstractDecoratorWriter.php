<?php

namespace foTYPE\PhpPresentation\Writer\ODPresentation;

use foTYPE\PhpPresentation\Shape\Chart;

abstract class AbstractDecoratorWriter extends \foTYPE\PhpPresentation\Writer\AbstractDecoratorWriter
{
    /**
     * @var Chart[]
     */
    protected $arrayChart;

    /**
     * @return \foTYPE\PhpPresentation\Shape\Chart[]
     */
    public function getArrayChart()
    {
        return $this->arrayChart;
    }

    /**
     * @param \foTYPE\PhpPresentation\Shape\Chart[] $arrayChart
     * @return AbstractDecoratorWriter
     */
    public function setArrayChart($arrayChart)
    {
        $this->arrayChart = $arrayChart;
        return $this;
    }
}
