<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 1.12.2016
 * Time: 21:20
 */

namespace Snowsoft\FormCreator;


class Form
{

    public static $DefaultLang = 'TR';


    /**
     *  Form Creator
     *
     * @param  string  $name  // FormName
     * @param  array $formRules // Form Attributes
     * @param  function $columns // Form Elements
     * @return FormBuild;
     */


    public static function Create($formName,$formRules=array(),$columns)
    {
        return new FormBuild($formName,$formRules,$columns);
    }


}