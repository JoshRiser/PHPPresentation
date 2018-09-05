<?php
/**
 * This file is part of PHPPresentation - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPPresentation is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPPresentation/contributors.
 *
 * @copyright   2009-2015 PHPPresentation contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 * @link        https://github.com/PHPOffice/PHPPresentation
 */

namespace foTYPE\PhpPresentation\Tests\Shape\Chart\Type;

use foTYPE\PhpPresentation\Shape\Chart\Type\Area;
use foTYPE\PhpPresentation\Shape\Chart\Series;
use PHPUnit\Framework\TestCase;

/**
 * Test class for Bar3D element
 *
 * @coversDefaultClass foTYPE\PhpPresentation\Shape\Chart\Type\Bar3D
 */
class AreaTest extends TestCase
{
    public function testData()
    {
        $object = new Area();

        $this->assertInternalType('array', $object->getSeries());
        $this->assertEmpty($object->getSeries());

        $array = array(
            new Series(),
            new Series(),
        );

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Type\\Area', $object->setSeries());
        $this->assertEmpty($object->getSeries());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Type\\Area', $object->setSeries($array));
        $this->assertCount(count($array), $object->getSeries());
    }

    public function testSeries()
    {
        $object = new Area();

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Shape\\Chart\\Type\\Area', $object->addSeries(new Series()));
        $this->assertCount(1, $object->getSeries());
    }

    public function testHashCode()
    {
        $oSeries = new Series();

        $object = new Area();
        $object->addSeries($oSeries);

        $this->assertEquals(md5($oSeries->getHashCode().get_class($object)), $object->getHashCode());
    }
}
