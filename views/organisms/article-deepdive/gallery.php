<?php $images = isset($images) && is_array($images) ? $images : []; ?>


<section class="article-gallery grid-container">
    <div class="gallery-container">
        <?php foreach ($images as $image) : ?>
            <div class="image-item">
                <?php if ($image['image']) : ?>
                    <img src="<?= $image['image'] ?>" alt="">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>