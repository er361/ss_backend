<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/26/18
 * Time: 12:36 AM
 */
/* @var $contact \app\models\Contact */
?>
<section class="font-weight-bold pt-0" id="contact">
    <div class="mb-5" id="map" style="height:500px;width:100%"></div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading"><?=$contact->title ?></h2>
                <hr class="my-4">
                <p class="mb-5"><?=$contact->text ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p><?=$contact->phone?></p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <form action="server.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ваше имя*">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Ваш телефон*">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Ваш e-mail">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Площадь помещения">
                    </div>
                    <button class="btn btn-primary btn-block rounded" type="submit">Получить консультацию</button>
                </form>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="mailto:your-email@your-domain.com"><?=$contact->e_mail?></a>
                </p>
            </div>

        </div>
    </div>
</section>
