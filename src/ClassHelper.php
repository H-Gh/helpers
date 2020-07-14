<?php

namespace HGh\Helpers;

use ReflectionClass;
use ReflectionException;

/**
 * A helper to help the application on managing the classes
 *
 * @category Helper
 * @package  Helpers
 * @author   Hamed Ghasempour <hamedghasempour@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     null
 */
class ClassHelper
{
    /**
     * Get the name of class from the namespace
     *
     * @param string $namespace The class namespace
     *
     * @return string
     * @throws ReflectionException
     */
    public static function getName(string $namespace)
    {
        $reflect = new ReflectionClass($namespace);

        return $reflect->getShortName();
    }
}