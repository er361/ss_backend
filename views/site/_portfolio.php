<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/26/18
 * Time: 12:34 AM
 */

use app\models\Portfolio; ?>
<section class="p-0" id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?= Portfolio::findOne(['pos' => 1])->full_img_path ?>">
                    <img class="img-fluid" src="<?= Portfolio::findOne(['pos' => 1])->full_img_path ?>" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                <?= Portfolio::findOne(['pos' => 1])->category ?>
                            </div>
                            <div class="project-name">
                                <?= Portfolio::findOne(['pos' => 1])->title ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?= Portfolio::findOne(['pos' => 2])->full_img_path ?>">
                    <img class="img-fluid" src="<?= Portfolio::findOne(['pos' => 2])->full_img_path ?>" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">

                            <div class="project-category text-faded">
                                <?= Portfolio::findOne(['pos' => 2])->category ?>
                            </div>
                            <div class="project-name">
                                <?= Portfolio::findOne(['pos' => 2])->title ?>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?= Portfolio::findOne(['pos' => 3])->full_img_path ?>">
                    <img class="img-fluid" src="<?= Portfolio::findOne(['pos' => 3])->full_img_path ?>" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">

                            <div class="project-category text-faded">
                                <?= Portfolio::findOne(['pos' => 3])->category ?>
                            </div>
                            <div class="project-name">
                                <?= Portfolio::findOne(['pos' => 3])->title ?>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?= Portfolio::findOne(['pos' => 4])->full_img_path ?>">
                    <img class="img-fluid" src="<?= Portfolio::findOne(['pos' => 4])->full_img_path ?>" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">

                            <div class="project-category text-faded">
                                <?= Portfolio::findOne(['pos' => 4])->category ?>
                            </div>
                            <div class="project-name">
                                <?= Portfolio::findOne(['pos' => 4])->title ?>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?= Portfolio::findOne(['pos' => 5])->full_img_path ?>">
                    <img class="img-fluid" src="<?= Portfolio::findOne(['pos' => 5])->full_img_path ?>" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">

                            <div class="project-category text-faded">
                                <?= Portfolio::findOne(['pos' => 5])->category ?>
                            </div>
                            <div class="project-name">
                                <?= Portfolio::findOne(['pos' => 5])->title ?>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?= Portfolio::findOne(['pos' => 6])->full_img_path ?>">
                    <img class="img-fluid" src="<?= Portfolio::findOne(['pos' => 6])->full_img_path ?>" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">

                            <div class="project-category text-faded">
                                <?= Portfolio::findOne(['pos' => 6])->category ?>
                            </div>
                            <div class="project-name">
                                <?= Portfolio::findOne(['pos' => 6])->title ?>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
