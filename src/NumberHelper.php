<?php

namespace HGh\Helpers;

/**
 * This class will help you on numbers
 * PHP version >= 7.0
 *
 * @category Helper
 * @package  Helpers
 * @author   Hamed Ghasempour <hamedghasempour@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     null
 */
class NumberHelper
{
    /**
     * Calculate the factorial of a number
     *
     * @param int $number
     *
     * @return int
     */
    public static function factorial(int $number)
    {
        $result = 1;
        for ($index = $number; $index > 0; $index--) {
            $result *= $index;
        }
        return $result;
    }
}
