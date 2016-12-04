<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 1.12.2016
 * Time: 23:49
 */

namespace Snowsoft\FormCreator\Elements;

use Snowsoft\FormCreator\FormLoader;

class Input
{

    public $LabelClass = 'col-lg-3';
    public $inputClass = 'col-lg-9';


    public function text($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['data'] = $this;
        $options['name'] = $name;
        $options['type'] = 'text';
        return FormLoader::inc('input/text', $options);
    }

    public function url($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['data'] = $this;
        $options['name'] = $name;
        $options['type'] = 'url';
        return FormLoader::inc('input/text', $options);
    }

    public function date($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['data'] = $this;
        $options['type'] = 'date';
        return FormLoader::inc('input/date', $options);
    }

    public function tel($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['data'] = $this;
        $options['name'] = $name;
        $options['type'] = 'tel';
        return FormLoader::inc('input/text', $options);
    }

    public function hidden($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['data'] = $this;
        $options['name'] = $name;
        $options['type'] = 'hidden';
        return FormLoader::inc('input/hidden', $options);
    }

    public function time($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['data'] = $this;
        $options['name'] = $name;
        $options['type'] = 'time';
        return FormLoader::inc('input/date', $options);
    }

    public function color($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['data'] = $this;
        $options['name'] = $name;
        $options['type'] = 'color';
        return FormLoader::inc('input/text', $options);
    }

    public function datetime($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['data'] = $this;
        $options['name'] = $name;
        $options['type'] = 'datetime';
        return FormLoader::inc('input/date', $options);
    }

    public function file($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['data'] = $this;
        $options['name'] = $name;
        $options['type'] = 'file';
        return FormLoader::inc('input/file', $options);
    }


    public function label($data)
    {
        $data['data'] = $this;
        $data['class'] = $this->inputClass;
        return FormLoader::inc('input/file', $data);
    }


}