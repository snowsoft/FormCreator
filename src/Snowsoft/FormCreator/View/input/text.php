<div class="form-group">
    <?php echo (isset($labelText) & $labelText) ? $labelText:null ?>
    <div class="<?= ((isset($inputClass)) ? $inputClass : null) ?>">
        <input type="<?= ((isset($type)) ? $type : 'text') ?>"
               class="form-control <?= ((isset($class)) ? $class : null) ?>"
               name="<?= ((isset($name)) ? $name : null) ?>"
               id="<?= ((isset($id)) ? $id : ((isset($name)) ? $name : null)) ?>"
            <?= ((isset($placeholder)) ? ' placeholder="' . $placeholder . '"' : null) ?>
            <?= ((isset($required)) ? 'required' : null) ?>
            <?php
            if (isset($rules) and $rules):
                $rule = explode('|', $rules);
                if (is_array($rule) and count($rule) > 0)
                    foreach ($rules as $item):
                        $field = explode(':', $item);
                        if (is_array($field) and count($field) > 0)
                            echo $field[0] . '="' . ((isset($field[1])) ? $field[1] : null) . '"';
                    endforeach;
            endif;
            ?>>
        <? if (isset($help) and $help): ?>
            <div class="helper"><?= $help ?></div>
        <? endif; ?>
    </div>
</div>
