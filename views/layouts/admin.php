<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/27/18
 * Time: 9:08 AM
 */
?>
<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

\app\assets\AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top">
<?php

use kartik\nav\NavX;

try {
    echo NavX::widget([
        'options' => ['class' => 'nav nav-pills'],
        'items' => [
            ['label' => 'Nav', 'url' => Url::to(['nav/index'])],
            ['label' => 'Site', 'url' => Url::to(['site/index'])]
        ],
        'encodeLabels' => false
    ]);
} catch (Exception $e) {
}
?>

<div class="container">
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
</div>
</body>
</html>
<?php $this->endPage() ?>

