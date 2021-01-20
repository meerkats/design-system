<?php
use helpers\Svg;
?>

<section class="publication">
    <div class="grid-x publication-content-container">
        <div class="cell small-7 medium-4 flex-container align-justify align-center overflow-hidden">
            <div class="publication-image">
                <img class="image lazy" data-src="<?= $image ?>">
            </div>
        </div>
        <div class="cell small-offset-1 small-9 medium-offset-1 medium-6 flex-container align-center-middle">
            <article class="publication-content">
                <tag class="tag">
                    <?= $tag ?? '' ?>
                </tag>
                <h3 class="heading h3">
                    <?= $title ?? '' ?>
                </h3>
                <p class="big-copy">
                    <?= $description ?? '' ?>
                </p>
                <div class="controls">
                    <div class="cta">
                        <button class="btn hide-for-small-only">
                           <?= $cta ?? 'Read More' ?>
                           <?php Svg::render('btn-arrow-blue', true, $cta ?? 'Read More', 'assets/images/arrows/')?>
                        </button>
                        <a class="text-link arrow-1 show-for-small-only" href="#">
                            Read More
                            <?php Svg::render('btn-arrow-red', true, 'Read More', 'assets/images/arrows/')?>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>