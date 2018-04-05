<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Zayavkas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zayavka-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'phone',
            'e_mail',
            'area',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
