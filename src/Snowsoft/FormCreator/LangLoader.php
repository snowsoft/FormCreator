<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 2.12.2016
 * Time: 00:23
 */

namespace Snowsoft\FormCreator;


class LangLoader
{

    public static  $lang = 'TR';

    public static $folder = __DIR__ . '/Lang/';

    public static $fileExt = '.php';

    public static function inc($file)
    {
        $filepath = self::$folder .self::$lang.'/'. $file . self::$fileExt;

        if ($file and file_exists($filepath)):
            return include($filepath);
        else:
            return null;
        endif;
    }


}