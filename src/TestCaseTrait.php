<?php
/*
 * This file is part of the PHPUnit Example Extension.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPUnit\ExampleExtension;

use SebastianBergmann\Comparator\Factory as ComparatorFactory;

trait TestCaseTrait
{
    /**
     * @beforeClass
     */
    public static function init(): void
    {
        $factory = ComparatorFactory::getInstance();

        $factory->register(new Comparator);
    }
}
