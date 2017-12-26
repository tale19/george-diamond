<?php
/**
 * Created by PhpStorm.
 * User: Stefan Tatic
 * Date: 12/24/2017
 * Time: 3:22 PM
 */

namespace App\Core;

class App
{
    protected static $registry = [];

    public static function bind($label, $value)
    {
        static::$registry[$label] = $value;
    }

    public static function use($label)
    {
        if(!array_key_exists($label, static::$registry))
        {
            throw new Exception("No {$label} is bound to the App registry.");
        }
        return static::$registry[$label];
    }
}