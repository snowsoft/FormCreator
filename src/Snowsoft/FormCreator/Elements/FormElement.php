<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 2.12.2016
 * Time: 01:08
 */

namespace Snowsoft\FormCreator\Elements;


class FormElement
{

    public function FormOpen($formName, $options = array())
    {
        return Load::inc($formName, $options);
    }

    public function formClose()
    {
        return '</form>';
    }


}