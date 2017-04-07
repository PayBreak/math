<?php
/*
 * This file is part of the PayBreak\Math package.
 *
 * (c) PayBreak <dev@paybreak.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Test\Algebra;

use PayBreak\Math\Algebra\Polynomial;

/**
 * Polynomial Test.
 *
 * @author WN
 */
class PolynomialTest extends \PHPUnit_Framework_TestCase
{
    public function testPolyArrayZero()
    {
        $this->assertSame(0.0, Polynomial::polyArray(1, []));
        $this->assertSame(0.0, Polynomial::polyArray(99, []));
    }

    public function testPolyArrayLine()
    {
        $this->assertSame(1.0, Polynomial::polyArray(1, [1]));
        $this->assertSame(1.0, Polynomial::polyArray(99, [1]));

        $this->assertSame(1.0, Polynomial::polyArray(0, [1, -0.0642]));
        $this->assertSame(0.1, round(Polynomial::polyArray(14, [1, -0.0642]), 1));
    }
}
