<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 1.12.2016
 * Time: 21:20
 */

namespace Snowsoft\FormCreator;


class FormBuild
{

    protected  $fields = array();

    protected $element;

    protected  $formName;

    protected $formRules;

    public function __construct($formName, $formRules = array(), \Closure $callback = null)
    {

        $this->formName  = $formName;
        if( !is_null($callback))
            $callback($this);

    }


    /**
     *
     * @param  string  $name
     * @param  array $options
     * @return FormBuild;
     */

    public function button($name, $options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'button';
        $this->fields[$name]['options'] = $options;
        return $this;

    }

    /**
     *
     * @param  string $name
     * @param  array $options
     * @return FormBuild;
     */

    public function checkbox($name, $options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'checkbox';
        $this->fields[$name]['options'] = $options;
        return $this;

    }

    /**
     *
     * @param  string $name
     * @param  array $options
     * @return FormBuild;
     */

    public function color($name, $options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'color';
        $this->fields[$name]['options'] = $options;
        return $this;

    }

    /**
     *
     * @param  string $name
     * @param  array $options
     * @return FormBuild;
     */

    public function dateTime($name, $options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'datetime';
        $this->fields[$name]['options'] = $options;
        return $this;

    }

    /**
     *
     * @param  string  $name
     * @param  array $options
     * @return FormBuild;
     */

    public function text($name,$options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'text';
        $this->fields[$name]['options'] = $options;
        return $this;

    }

    /**
     *
     * @param  string $name
     * @param  array $options
     * @param  boolean $multiple
     * @return FormBuild;
     */

    public function file($name, $options = array(), $multiple = false)
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'file';
        $this->fields[$name]['multiple'] = $multiple;
        $this->fields[$name]['options'] = $options;
        return $this;

    }


    /**
     *
     * @param  string  $name
     * @param  array $options
     * @return FormBuild;
     */

    public function url($name,$options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'url';
        $this->fields[$name]['options'] = $options;
        return $this;

    }

    /**
     *
     * @param  string  $name
     * @param  array $options
     * @return FormBuild;
     */

    public function date($name,$options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'date';
        $this->fields[$name]['options'] = $options;
        return $this;

    }


    public function __destruct()
    {
        return new FormParser(['formName' => $this->formName, 'formRules' => $this->formRules, 'elements' => $this->fields]);
    }


}