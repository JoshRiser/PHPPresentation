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

namespace foTYPE\PhpPresentation\Tests;

use foTYPE\PhpPresentation\Slide\SlideLayout;
use PHPUnit\Framework\TestCase;

/**
 * Test class for PhpPresentation
 *
 * @coversDefaultClass foTYPE\PhpPresentation\Slide\SlideLayout
 */
class SlideLayoutTest extends TestCase
{
    public function testBase()
    {
        $mockSlideMaster = $this->getMockForAbstractClass('foTYPE\PhpPresentation\Slide\SlideMaster');

        $object = new SlideLayout($mockSlideMaster);
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Slide\\AbstractSlide', $object);
        $this->assertInstanceOf('\\ArrayObject', $object->getShapeCollection());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Style\\ColorMap', $object->colorMap);
    }

    public function testLayoutName()
    {
        // Mocks
        $mockSlideMaster = $this->getMockForAbstractClass('foTYPE\PhpPresentation\Slide\SlideMaster');

        // Expected
        $expectedLayoutName = 'Title'.rand(1, 100);

        $object = new SlideLayout($mockSlideMaster);

        $this->assertNull($object->getLayoutName());
        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Slide\\SlideLayout', $object->setLayoutName($expectedLayoutName));
        $this->assertEquals($expectedLayoutName, $object->getLayoutName());
    }

    public function testSlideMaster()
    {
        // Mocks
        $mockSlideMaster = $this->getMockForAbstractClass('foTYPE\PhpPresentation\Slide\SlideMaster');

        $object = new SlideLayout($mockSlideMaster);

        $this->assertInstanceOf('PhpOffice\\PhpPresentation\\Slide\\SlideMaster', $object->getSlideMaster());
    }
}
