<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 2.12.2016
 * Time: 00:23
 */

namespace Snowsoft\FormCreator;


class FormLoad
{

    public static $folder = __DIR__ . '/View/';

    public static $fileExt = '.php';

    public static function inc($file, $data = null)
    {
        $filepath = self::$folder . $file . self::$fileExt;

        if ($file and file_exists($filepath)):
            ob_start();
            if ($data) extract($data);
            include($filepath);
            return ob_get_clean();
        else:
            return null;
        endif;
    }


}