<?php

use app\components\PageTitleWidget;
use app\models\License;
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

    <blockquote>
        <?= PageTitleWidget::widget(['code' => 'license']) ?>
    </blockquote>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'img_path',
            [
                'attribute' => 'position',
                'value' => function ($model) {
                    return License::getPosition($model->position);
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
