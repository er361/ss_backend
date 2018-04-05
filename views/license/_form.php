<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\License */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="license-form">

    <?php $form = ActiveForm::begin([
            'options' => [
                    'enctype' => 'multipart/form-data'
            ]
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput(['accept' => 'image/*']) ?>
    <?= $form->field($model,'position')->dropDownList([
        0 => 'left',
        1 => 'center',
        2 => 'right',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
