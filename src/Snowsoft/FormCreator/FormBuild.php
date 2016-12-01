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

    public function __construct($formName,\Closure $callback = null)
    {

        $this->formName  = $formName;
        if( !is_null($callback))
            $callback($this);

    }



    /**
     *
     * @param  string  $name
     * @param  Array  $options
     * @return FormBuild;
     */

    public  function input($name,$options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'input';
        $this->fields[$name] = $options;
        return $this;

    }

    /**
     *
     * @param  string  $name
     * @param  Array  $options
     * @return FormBuild;
     */

    public function text($name,$options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'text';
        $this->fields[$name] = $options;
        return $this;

    }

    /**
     *
     * @param  string  $name
     * @param  Array  $options
     * @return FormBuild;
     */

    public function url($name,$options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'url';
        $this->fields[$name] = $options;
        return $this;

    }

    /**
     *
     * @param  string  $name
     * @param  Array  $options
     * @return FormBuild;
     */

    public function date($name,$options = array())
    {
        $this->element = $name;
        $this->fields[$name]['type'] = 'date';
        $this->fields[$name] = $options;
        return $this;

    }


    public function __destruct()
    {
        return new FormParser(['formName'=>$this->formName,'elements'=>$this->fields]);
    }





}