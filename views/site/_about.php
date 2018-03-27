<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/26/18
 * Time: 12:33 AM
 */
/* @var $about \app\models\About  */
?>
<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white"><?= $about->title?></h2>
                <hr class="light my-4">
                <p class="text-faded mb-4"><?= $about->text?></p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services"><?= $about->button_text?></a>
            </div>
        </div>
    </div>
</section>
