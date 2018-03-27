<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Licenses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="license-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create License', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'img_path',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
