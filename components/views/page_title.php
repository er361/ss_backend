<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 4/2/18
 * Time: 9:14 PM
 */

use yii\bootstrap\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
if(Yii::$app->session->hasFlash('title'))
echo Alert::widget([
    'options' => [
        'class' => 'alert-info',
    ],
    'body' => Yii::$app->session->getFlash('title')
]);
$form = ActiveForm::begin([
    'action' => ['page-title/index']
]);
    echo Html::tag('h1','Title');
    echo $form->field($model,'text');
    echo $form->field($model,'code')->hiddenInput(['value' => $model->code]);
    echo Html::submitButton('submit',['class' => 'btn btn-secondary']);
ActiveForm::end();