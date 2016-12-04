<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 1.12.2016
 * Time: 23:49
 */

namespace Snowsoft\FormCreator\Elements;

use Snowsoft\FormCreator\FormLoader;

class Button
{

    public function Submit($options)
    {
        $options['inputClass'] = 'col-lg-2';
        $options['type'] = 'submit';
        return FormLoader::inc('input/submit', $options);
    }

}