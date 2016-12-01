<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 1.12.2016
 * Time: 23:49
 */

namespace Snowsoft\FormCreator\Elements;


use Snowsoft\FormCreator\Load;

class Input
{


    public function __call($meth, $args)
    {

        if ($meth)
            switch ($meth):
                case 'text':
                    return Load::inc('text', $args[0]);
                    break;

            endswitch;

    }


}