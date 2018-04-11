<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/26/18
 * Time: 12:34 AM
 */

use app\models\Portfolio;

/* @var $this \yii\web\View */
/* @var $img Portfolio */
?>
<section class="p-0" id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <? foreach ($imgs as $img): ?>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" id="<?= $img->title ?>" href="<?= $img->full_img_path ?>">
                        <img class="img-fluid" src="<?= $img->full_img_path ?>" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?= $img->category ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</section>
