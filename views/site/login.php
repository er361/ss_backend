<?php
    /* @var $this \yii\web\View */

    /* @var $model \app\models\LoginForm  */

\app\assets\LoginAsset::register($this);
?>
<?php
    $form = \yii\widgets\ActiveForm::begin([
            'id' => 'login-form',
        'options' => ['class' => 'form-signin']
    ]);
?>
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <?php echo $form->field($model,'username')->textInput(['class' => 'form-control'])?>
    <?= $form->field($model,'password')->passwordInput(['class' => 'form-control'])?>
    <?= $form->field($model,'rememberMe')->checkbox(['class' => "checkbox mb-3"])?>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
<?php \yii\widgets\ActiveForm::end()?>
