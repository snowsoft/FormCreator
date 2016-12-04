<?php if (isset($label) and $label): ?>
    <label for="<?= ((isset($name)) ? $name : null) ?>"
           class="<?= ((isset($labelClass)) ? $labelClass : null) ?>"><?= ((isset($label)) ? $label : null) ?></label>
<?php endif; ?>