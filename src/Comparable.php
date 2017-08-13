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

interface Comparable
{
    public function compareTo(Comparable $other): int;
}
