<?php

/**
 * This class contains all methods that helps us on arrays
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
 * This class contains all methods that helps us on arrays
 * PHP version >= 7.0
 *
 * @category Helpers
 * @package  Helpers
 * @author   Hamed Ghasempour <hamedghasempour@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     null
 */
class ArrayHelper
{
    /**
     * This method will make all indexes of array to snake case
     *
     * @param array $array     The array
     * @param bool  $recursive A flag to determine should method change indexes recursively or not
     *
     * @return array
     */
    public static function snakeIndexes(array $array, bool $recursive = true)
    {
        $newArray = [];
        foreach ($array as $key => $item) {
            if ($recursive && is_array($item)) {
                $newArray[TextHelper::toSnakeCase($key)] = self::snakeIndexes((array)$item, $recursive);
            } elseif ($recursive && is_object($item)) {
                $newArray[TextHelper::toSnakeCase($key)] = ObjectHelper::snakeKeys($item, $recursive);
            } else {
                $newArray[TextHelper::toSnakeCase($key)] = $item;
            }
        }
        return $newArray;
    }

    /**
     * This method will change the index of an array
     *
     * @param mixed $oldIndex Change from this index
     * @param mixed $newIndex Change to this index
     * @param array $array    The array to do this action on that
     *
     * @return array
     */
    public static function changeIndex($oldIndex, $newIndex, $array)
    {
        if (isset($array[$oldIndex])) {
            $array[$newIndex] = $array[$oldIndex];
            unset($array[$oldIndex]);
        }
        return $array;
    }
}
