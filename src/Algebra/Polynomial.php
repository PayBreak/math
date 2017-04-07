<?php
/*
 * This file is part of the PayBreak\Math package.
 *
 * (c) PayBreak <dev@paybreak.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace PayBreak\Math\Algebra;

/**
 * Simple Polynomial
 *
 * @author WN
 * @package PayBreak\Math\Algebra
 */
class Polynomial
{
    /**
     * @author WN
     * @param float $x
     * @param array $coefficients [a0, a1, a2, ... an]
     * @return float
     */
    public static function polyArray($x, array $coefficients)
    {
        $result = 0;
        $i = 0;

        foreach ($coefficients as $a) {

            $result += pow($x, $i) * $a;
            $i++;
        }

        return (float) $result;
    }
}
