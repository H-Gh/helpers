<?php

/**
 * This class will help us on texts
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
 * This class will help us on texts
 * PHP version >= 7.0
 *
 * @category Helpers
 * @package  Helpers
 * @author   Hamed Ghasempour <hamedghasempour@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     null
 */
class TextHelper
{
    /**
     * This method will convert a camelCase text to snake_case text
     *
     * @param string $text The text that should be convert
     *
     * @return string
     */
    public static function toSnakeCase(string $text)
    {
        return strtolower(preg_replace('/(?<=\d)(?=[A-Za-z])|(?<=[A-Za-z])(?=\d)|(?<=[a-z])(?=[A-Z])/', "_", $text));
    }

    /**
     * This method will convert snake_case to camelCase
     *
     * @param string $text The text that should be convert
     *
     * @return string
     */
    public static function snakeToCamel($text)
    {
        return lcfirst(implode('', array_map('ucfirst', explode('_', $text))));
    }

    /**
     * This method will convert snake_case to PascalCase
     *
     * @param string $text The text that should be convert
     *
     * @return string
     */
    public static function snakeToPascal($text)
    {
        return implode('', array_map('ucfirst', explode('_', $text)));
    }

    /**
     * This method will return the class name of a given namespace
     *
     * @param string $namespace The namespace that its class name will return
     *
     * @return mixed
     */
    public static function className(string $namespace)
    {
        $path = explode('\\', $namespace);
        return array_pop($path);
    }

    /**
     * This method will search inside a text and remove some another text or texts
     *
     * @param string|array $searchFor The text or array of texts that should be find and then remove
     * @param string       $text      The text that should search inside it
     *
     * @return string
     */
    public static function remove($searchFor, string $text)
    {
        if (is_array($searchFor)) {
            foreach ($searchFor as $searchText) {
                $text = str_replace($searchText, "", $text);
            }
        } else {
            $text = str_replace($searchFor, "", $text);
        }

        return $text;
    }

    /**
     * This method will remove all spaces
     *
     * @param string $text The text that should search inside it
     *
     * @return string
     */
    public static function removeSpaces(string $text)
    {
        return str_replace(" ", "", $text);
    }

    /**
     * This method will search inside a text and replace some another text or texts
     *
     * @param string $searchFor   The text or array of texts that should be find and then remove
     * @param string $replaceWith The text that should be replaced
     * @param string $text        The text that should search inside it
     *
     * @return string
     */
    public static function replace($searchFor, string $replaceWith, string $text)
    {
        return str_replace($searchFor, $replaceWith, $text);
    }

    /**
     * This method will convert a text to utf8
     *
     * @param string $text The text that should be convert
     *
     * @return string
     */
    public static function utf8(string $text)
    {
        return utf8_encode($text);
    }

    /**
     * This method will remove all non UTF8 characters from text
     *
     * @param string $text The text that should be convert
     *
     * @return string
     */
    public static function removeNonUtf8(string $text)
    {
        return preg_replace('/(?:^[^\p{L}\p{N}]+|[^\p{L}\p{N}]+$)/u', '', $text);
    }

    /**
     * This method will remove all non Alphanumeric characters from text
     *
     * @param string $text The text that should be convert
     *
     * @return string
     */
    public static function removeNonAlphanumeric(string $text)
    {
        return preg_replace("/[^A-Za-z0-9 ]/", '', $text);
    }

    /**
     * This method will convert a text to lowercase
     *
     * @param string $text The text that should be convert
     *
     * @return string
     */
    public static function lowercase(string $text)
    {
        return strtolower($text);
    }

    /**
     * This method will convert a text to uppercase
     *
     * @param string $text The text that should be convert
     *
     * @return string
     */
    public static function uppercase(string $text)
    {
        return strtoupper($text);
    }

    /**
     * This method will reformat number to an decimal format
     *
     * @param mixed $number The number that should be reformat
     * @param       $countOfDecimals
     *
     * @return string
     */
    public static function decimal($number, $countOfDecimals)
    {
        $countDecimal = strlen(substr(strrchr($number, "."), 1));
        $countDecimal = $countDecimal > $countOfDecimals ? $countOfDecimals : $countDecimal;

        return number_format($number, $countDecimal);
    }
}
