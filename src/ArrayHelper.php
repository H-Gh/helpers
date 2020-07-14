<?php

namespace HGh\Helpers;

/**
 * This class contains all methods that helps us on arrays
 * PHP version >= 7.0
 *
 * @category Helper
 * @package  Helpers
 * @author   Hamed Ghasempour <hamedghasempour@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
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

    /**
     * @param array  $dataArray The array
     * @param string $itemPrefix
     * @param string $wrapper
     *
     * @return string
     */
    public static function implode($dataArray, $itemPrefix = "", $wrapper = "")
    {
        return "($itemPrefix$wrapper" . implode("$wrapper,$wrapper$itemPrefix", $dataArray) . "$wrapper)";
    }

    /**
     * Add prefix to all the keys of a specific array
     *
     * @param array  $dataArray The array
     * @param string $prefix    The prefix to add to key
     *
     * @return mixed
     */
    public static function addPrefixToIndexes(array $dataArray, $prefix)
    {
        foreach ($dataArray as $key => $item) {
            $dataArray[$prefix . $key] = $item;
            unset($dataArray[$key]);
        }

        return $dataArray;
    }
}
