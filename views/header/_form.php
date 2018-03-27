<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Header */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="header-form">

    <?php $form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
    ]); ?>
    <input type="hidden" name="MAX_FILE_SIZE" value="10240000" />
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'muted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput(['accept' => 'image/*','']) ?>

    <?= $form->field($model, 'button_text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
