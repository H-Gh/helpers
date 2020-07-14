<?php

namespace HGh\Helpers;

/**
 * A helper to help the application to manage the strings
 * PHP version >= 7.0
 *
 * @category Helper
 * @package  Helpers
 * @author   Hamed Ghasempour <hamedghasempour@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     null
 */
class StringHelper
{
    /**
     * @param int $length
     *
     * @return string
     */
    public static function generate($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($index = 0; $index < $length; $index++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}