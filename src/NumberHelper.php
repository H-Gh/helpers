<?php

/**
 * This class will help you on numbers
 * PHP version >= 7.0
 *
 * @category Helpers
 * @package  Helpers
 * @author   Hamed Ghasempour <hamedghasempour@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version  GIT: <git_id>
 * @link     null
 */

namespace BetPress\Helpers;

/**
 * This class will help you on numbers
 * PHP version >= 7.0
 *
 * @category Helpers
 * @package  Helpers
 * @author   Hamed Ghasempour <hamedghasempour@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
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
