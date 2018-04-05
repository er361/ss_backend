<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/26/18
 * Time: 12:36 AM
 */

use yii\bootstrap\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $contact \app\models\Contact */
?>
<?if(Yii::$app->session->hasFlash('zv')):?>
    <?= Alert::widget([
        'options' => [
            'class' => 'alert-info',
        ],
        'body' => Yii::$app->session->getFlash('zv'),
    ])?>
<?endif;?>
<section class="font-weight-bold pt-0" id="contact">
    <div class="mb-5" id="map" style="height:500px;width:100%"></div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading"><?= $contact->title ?></h2>
                <hr class="my-4">
                <p class="mb-5"><?= $contact->text ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p><?= $contact->phone ?></p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <div class="zayavka-form">
                        <? $model = new \app\models\Zayavka(); ?>
                        <?php $form = ActiveForm::begin([
                            'action' => ['zayavka/create'],
//                            'options' => ['data-pjax' => true]
                        ]); ?>

                            <div class="form-group">
                                <?= $form->field($model, 'name')
                                    ->textInput(['maxlength' => true,
                                        'placeholder' => 'Ваше имя'])
                                    ->label(false)
                                ?>
                            </div>

                            <?= $form->field($model, 'phone')
                                ->textInput(['maxlength' => true,
                                    'placeholder' => 'Ваш телефон'])
                                ->label(false) ?>

                            <?= $form->field($model, 'e_mail')
                                ->textInput(['maxlength' => true,
                                    'placeholder' => 'E-mail'])
                                ->label(false)
                            ?>

                            <?= $form->field($model, 'area')
                                ->textInput([
                                    'maxlength' => true,
                                    'placeholder' => 'Площадь помещения'
                                ])->label(false) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Оставить заявку', [
                                        'class' => 'btn btn-primary btn-block rounded',
                                    'disabled' => true]) ?>
                            </div>

                        <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="mailto:your-email@your-domain.com"><?= $contact->e_mail ?></a>
                </p>
            </div>

        </div>
    </div>
</section>
