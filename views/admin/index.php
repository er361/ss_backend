<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php
$form = ActiveForm::begin([
    'action' => ['page-title/index'],
    'options' => ['enctype' => 'multipart/form-data']
]);
echo Html::tag('h3', 'Иконка для сата');
echo $form->field($model, 'file')->label('favicon')->fileInput();
echo $form->field($model,'code')->hiddenInput(['value' => 'icon'])->label(false);
echo Html::img($model->text);
echo Html::tag('br');
echo Html::submitButton('Save', ['class' => 'btn btn-primary']);
ActiveForm::end();



