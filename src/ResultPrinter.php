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

use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\TestListenerDefaultImplementation;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;
use PHPUnit\Util\Printer;

class MyPrinter extends Printer implements TestListener
{
    use TestListenerDefaultImplementation;

    public function startTest(Test $test)
    {
        if (!$test instanceof TestCase) {
            return;
        }

        $this->write($test->getName() . PHP_EOL);
    }
}
