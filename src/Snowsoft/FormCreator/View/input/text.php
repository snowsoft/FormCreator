<div class="form-group <?= ((isset($name)) ? $name : null) ?>">
    <? if (isset($label) and $label): ?>
        <label for="<?= ((isset($name)) ? $name : null) ?>"><?= ((isset($label)) ? $label : null) ?></label>
    <? endif; ?>
    <input type=" <?= ((isset($type)) ? $type : 'type') ?>"
           class="form-control <?= ((isset($class)) ? $class : null) ?>"
           name="<?= ((isset($name)) ? $name : null) ?>"
           id="<?= ((isset($id)) ? $id : ((isset($name)) ? $name : null)) ?>"
           placeholder="<?= ((isset($placeholder)) ? $placeholder : null) ?>"
        <?= ((isset($required)) ? 'required' : null) ?>
        <? if (isset($rules) and $rules)
            foreach ($rules as $name => $rule):
                echo $name . '="' . $rule . '"';
            endforeach;
        ?>>
    <? if (isset($help) and $help): ?>
        <div class="helper"><?= $help ?></div>
    <? endif; ?>
</div>