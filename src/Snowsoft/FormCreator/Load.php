<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 2.12.2016
 * Time: 00:23
 */

namespace Snowsoft\FormCreator;


class Load
{

    public static $folder = __DIR__ . '/View/';

    public static function inc($file, $data = null)
    {

        if ($file and file_exists(self::$folder . $file)):
            ob_start();
            if ($data) extract($data);
            include(self::$folder . $file);
            return ob_get_clean();
        else:
            return null;
        endif;
    }


}