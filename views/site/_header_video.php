<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/28/18
 * Time: 8:07 PM
 */

use yii\helpers\Url;

?>
<div class="card bg-dark text-white rounded-0">
    <video class="card-img" src="<?= Url::to('uploads/header/la.mov')?>" autoplay loop></video>
    <div id="overlay-video" class="card-img-overlay">
        <div class="text-center text-white d-flex">
            <div style="margin-top: 25vh !important;" class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 id="heading" class="text-uppercase">
                            <strong><?= $header->title ?></strong>
                        </h1>
                        <hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <p id="p-heading" class="text-faded mb-5"><?= $header->muted ?></p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about"><?= $header->button_text?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
