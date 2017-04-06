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

use SebastianBergmann\Comparator\Comparator as BaseComparator;
use SebastianBergmann\Comparator\ComparisonFailure;

class Comparator extends BaseComparator
{
    public function accepts($expected, $actual)
    {
        return $expected instanceof Comparable && $actual instanceof Comparable;
    }

    public function assertEquals($expected, $actual, $delta = 0.0, $canonicalize = false, $ignoreCase = false, array &$processed = array())
    {
        if ($expected->compareTo($actual) !== 0) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                $this->exporter->export($expected),
                $this->exporter->export($actual),
                false,
                'Failed asserting that two Comparable objects are equal.'
            );
        }
    }
}
