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

    public $labelClass = 'col-lg-3';
    public $inputClass = 'col-lg-9';


    public function text($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['type'] = 'text';
        if (isset($options['label']) and $options['label'])
            $options['labelText'] = $this->label($options);
        return FormLoader::inc('input/text', $options);
    }

    public function url($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['type'] = 'url';
        if (isset($options['label']) and $options['label'])
            $options['labelText'] = $this->label($options);
        return FormLoader::inc('input/text', $options);
    }

    public function date($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['type'] = 'date';
        if (isset($options['label']) and $options['label'])
            $options['labelText'] = $this->label($options);
        return FormLoader::inc('input/date', $options);
    }

    public function tel($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['type'] = 'tel';
        if (isset($options['label']) and $options['label'])
            $options['labelText'] = $this->label($options);
        return FormLoader::inc('input/text', $options);
    }

    public function hidden($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['type'] = 'hidden';
        if (isset($options['label']) and $options['label'])
            $options['labelText'] = $this->label($options);
        return FormLoader::inc('input/hidden', $options);
    }

    public function time($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['type'] = 'time';
        if (isset($options['label']) and $options['label'])
            $options['labelText'] = $this->label($options);
        return FormLoader::inc('input/date', $options);
    }

    public function color($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['type'] = 'color';
        if (isset($options['label']) and $options['label'])
            $options['labelText'] = $this->label($options);
        return FormLoader::inc('input/text', $options);
    }

    public function datetime($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['type'] = 'datetime';
        if (isset($options['label']) and $options['label'])
            $options['labelText'] = $this->label($options);
        return FormLoader::inc('input/date', $options);
    }

    public function file($name, $options)
    {
        $options['inputClass'] = $this->inputClass;
        $options['name'] = $name;
        $options['type'] = 'file';
        if (isset($options['label']) and $options['label'])
            $options['labelText'] = $this->label($options);
        return FormLoader::inc('input/file', $options);
    }


    public function label($data)
    {
        $data['labelClass'] = $this->labelClass;
        return FormLoader::inc('input/file', $data);
    }


}