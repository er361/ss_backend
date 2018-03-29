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

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'muted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model,'background_type')->dropDownList([
        1 => 'video',
        0 => 'image'
    ]) ?>

    <?= $form->field($model, 'imgFile')->fileInput(['accept' => 'image/*']) ?>

    <?= $form->field($model, 'videoFile')->fileInput() ?>

    <?= $form->field($model, 'button_text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?$this->registerJsFile('js/admin.js',[
        'depends' => \yii\web\JqueryAsset::class
]);
?>