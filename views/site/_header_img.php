<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/26/18
 * Time: 12:33 AM
 */
/* @var $header \app\models\Header */
/* @var $this  \yii\web\View */
?>
<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong><?= $header->title ?></strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5"><?= $header->muted ?></p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about"><?= $header->button_text?></a>
            </div>
        </div>
    </div>
</header>
<?php $this->registerJs("$('header.masthead').css('background-image', 'url(\"$header->img_path\")');",\yii\web\View::POS_LOAD); ?>

