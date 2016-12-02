<?php
/**
 * Created by PhpStorm.
 * User: Abdulkadir
 * Date: 1.12.2016
 * Time: 23:38
 */

namespace Snowsoft\FormCreator;

use Snowsoft\FormCreator\Elements\FormElement;
use Snowsoft\FormCreator\Elements\Input;


class FormParser
{

    public function __construct($form)
    {

      echo  $this->parse($form);
    }


    protected function parse($form)
    {
        $input = new Input();
        $formElement = new FormElement();

        $html = $formElement->FormOpen($form['formName'], $form['formRules']);

        if (is_array($form['elements']))
            foreach ($form['elements'] as $name => $options):

                if (isset($options['type']) and $options['type']):

                    switch ($options['type']):
                        case 'text':
                            $html .= $input->text($name, $options['options']);
                            break;
                        case 'url':
                            $html .= $input->url($name, $options['options']);
                            break;
                        case 'date':
                            $html .= $input->date($name, $options['options']);
                            break;
                        case 'tel':
                            $html .= $input->tel($name, $options['options']);
                            break;
                        case 'hidden':
                            $html .= $input->hidden($name, $options['options']);
                            break;
                        case 'time':
                            $html .= $input->time($name, $options['options']);
                            break;


                            endswitch;


                endif;


            endforeach;


        $html .= $formElement->formClose();


        return $html;




    }
}