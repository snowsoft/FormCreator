<form class="form-control <?= ((isset($class)) ? $class : null) ?>"
        <?= ((isset($name)) ? 'name="'.$name.'"' : null) ?> id="<?= ((isset($id)) ? $id : ((isset($name)) ? $name : null)) ?>"
        method="<?= ((isset($method)) ? $method : 'post') ?>" <?= ((isset($action)) ? 'action="'.$action.'"' : '') ?><?= ((isset($enctype)) ? 'enctype="'.$enctype.'"' :null) ?><?
        if (isset($rules) and $rules):
        $rule = explode('|',$rules);
        if(is_array($rule) and count($rule)>0)
          foreach ($rule as $item):
              $field = explode(':',$item);
        if(is_array($field) and count($field)>0)
        echo $field[0] . '="' . ((isset($field[1])) ? $field[1]:null) . '" ';
        endforeach;
        endif;
    ?>>

