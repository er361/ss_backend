<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/26/18
 * Time: 12:34 AM
 */
use app\models\PageTitles;
use app\models\Services;

?>
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?= PageTitles::findOne(['code' => 'services'])->text?></h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="./img/icons/bc.svg" width="150" height="90" />
                    <h3 class="mb-3"><?= Services::getModelByCode('BC')->title?></h3>
                    <p class="text-muted mb-0"><?=Services::getModelByCode('BC')->text?></p>
                </div>
            </div>
            <div class="col text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="./img/icons/apartment.svg" width="150" height="90" />
                    <h3 class="mb-3"><?= Services::getModelByCode('GK')->title?></h3>
                    <p class="text-muted mb-0"><?=Services::getModelByCode('GK')->text?></p>
                </div>
            </div>
            <div class="col text-center">
                <div class="service-box mt-5 mx-auto">
                    <img  src="./img/icons/hospital.svg" width="150" height="90" />
                    <h3 class="mb-3"><?= Services::getModelByCode('OBW')->title?></h3>
                    <p class="text-muted mb-0"><?=Services::getModelByCode('OBW')->text?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="./img/icons/method-draw-image.svg" width="100" height="90" />
                    <h3 class="mb-3"><?= Services::getModelByCode('SK')->title?></h3>
                    <p class="text-muted mb-0"><?=Services::getModelByCode('SK')->text?></p>
                </div>
            </div>
            <div class="col text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="./img/icons/factory.svg" width="150" height="90" />
                    <h3 class="mb-3"><?= Services::getModelByCode('PR')->title?></h3>
                    <p class="text-muted mb-0"><?=Services::getModelByCode('PR')->text?></p>
                </div>
            </div>
            <div class="col text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="./img/icons/restoran.svg" width="90" height="90" />
                    <h3 class="mb-3"><?= Services::getModelByCode('K&R')->title?></h3>
                    <p class="text-muted mb-0"><?=Services::getModelByCode('K&R')->text?></p>
                </div>
            </div>
        </div>
    </div>
</section>
