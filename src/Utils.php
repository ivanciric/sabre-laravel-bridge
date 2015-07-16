<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 7/16/15
 * Time: 4:18 PM
 */

namespace Emcodenet\SabreLaravelBridge;


class Utils {

    static function startsWith($haystack, $needle)
    {
        $length = strlen($needle);
        return (substr($haystack, 0, $length) === $needle);
    }
}