<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 1.12.2016
 * Time: 23:38
 */

namespace Snowsoft\FormCreator;


class FormParser
{

    public function __construct($form)
    {
        return $this->parse($form);
    }


    protected function parse($form)
    {
        var_dump($form['elements']);


    }
}