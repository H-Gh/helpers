<?php

/**
 * This class contains all methods that helps us on objects
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

use stdClass;

/**
 * This class contains all methods that helps us on objects
 * PHP version >= 7.0
 *
 * @category Helpers
 * @package  Helpers
 * @author   Hamed Ghasempour <hamedghasempour@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     null
 */
class ObjectHelper
{
    /**
     * This method will make all indexes of object to snake case
     *
     * @param object $object    The object
     * @param bool   $recursive A flag to determine should method change indexes recursively or not
     *
     * @return object
     */
    public static function snakeKeys($object, bool $recursive = true)
    {
        $newObject = new stdClass();
        foreach ($object as $key => $item) {
            if ($recursive && is_object($item)) {
                $newObject->{TextHelper::toSnakeCase($key)} = self::snakeKeys($item, $recursive);
            } elseif ($recursive && is_array($item)) {
                $newObject->{TextHelper::toSnakeCase($key)} = ArrayHelper::snakeIndexes($item, $recursive);
            } else {
                $newObject->{TextHelper::toSnakeCase($key)} = $item;
            }
        }
        return $newObject;
    }

    /**
     * This method will change the index of an array
     *
     * @param mixed  $oldIndex Change from this index
     * @param mixed  $newIndex Change to this index
     * @param object $object   The array to do this action on that
     *
     * @return object
     */
    public static function changeKey($oldIndex, $newIndex, $object)
    {
        if (isset($object->{$oldIndex})) {
            $object->{$newIndex} = $object->{$oldIndex};
            unset($object->{$oldIndex});
        }
        return $object;
    }
}
