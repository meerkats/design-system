<?php
    $options = isset($options)? $options : []
?>

<div class="select-box <?= $additionalClasses ?? '' ?>" data-select>
    <button class="selected" data-select-open>
        <?= $placeholder ?>
    </button>
    <div class="options-container" data-select-options>
        <?php foreach ($options as $option) : ?>
            <div class="option">
                <input type="radio"
                       class="radio"
                       name="<?= $name ?>"
                       id="<?= $option['id'] ?>"
                       value="<?= $option['value'] ?>">

                <label for="<?= $option['id'] ?>"><?= $option['label'] ?></label>
            </div>
        <?php endforeach; ?>
    </div>
</div>
