<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 2.12.2016
 * Time: 01:08
 */

namespace Snowsoft\FormCreator\Elements;

use Snowsoft\FormCreator\FormLoader;

class FormElement
{

    public function FormOpen($formName, $options = array())
    {
        $options['name'] = $formName;
        return FormLoader::inc('formOpen', $options);
    }

    public function formClose()
    {
        return '</form>';
    }


}