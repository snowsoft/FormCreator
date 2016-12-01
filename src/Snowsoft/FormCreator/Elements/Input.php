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


    public function text($name, $options)
    {
        $options['name'] = $name;
        $options['type'] = 'text';
        return Load::inc('input/text', $options);
    }

    public function url($name, $options)
    {
        $options['name'] = $name;
        return Load::inc('input/text', $options);
    }

    public function date($name, $options)
    {
        $options['name'] = $name;
        return Load::inc('input/text', $options);
    }

}