<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/26/18
 * Time: 12:35 AM
 */

use app\models\License;
use app\models\PageTitles;
use yii\helpers\Html;

?>
<section id="license" class="bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4"><?= PageTitles::findOne(['code' => 'license'])->text ?></h2>
        <div class="row mt-5">
            <div class="col">
                <a class="lnse" href="#">
<!--                    <img class="float-right" src="./img/license/l1.jpg" width="250" alt="">-->
                    <? $left = License::findOne(['position' => License::POS_LEFT]);
                    echo Html::img($left->img_path, [
                        'class' => 'float-right',
                        'width' => 250,
                        'alt' => $left->title
                    ]) ?>
                </a>
            </div>
            <div class="col px-0">
                <a href="#" class="lnse">
                    <? $center = License::findOne(['position' => License::POS_CENTER]);
                    echo Html::img($center->img_path, [
                        'width' => 250,
                        'alt' => $center->title
                    ]) ?>

                </a>
            </div>
            <div class="col">
                <a href="#" class="lnse">                <? $right = License::findOne(['position' => License::POS_RIGHT]);
                    echo Html::img($right->img_path, [
                        'class' => 'lnse float-left',
                        'width' => 250,
                        'alt' => $right->title
                    ]) ?>
                </a>
            </div>
        </div>

        <div id="modal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
<!--                        <h5 class="modal-title">Modal title</h5>-->
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        contetn
                        <img id="modal-img" src="" class="img-fluid" alt="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
