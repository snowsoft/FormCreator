<?php if (isset($label) and $label): ?>
    <label for="<?= ((isset($name)) ? $name : null) ?>"
           class="<?= ((isset($class)) ? $class : null) ?>"><?= ((isset($label)) ? $label : null) ?></label>
<?php endif; ?>