<?php

namespace app\controllers;

use app\models\PageTitles;
use yii\filters\AccessControl;

class AdminController extends \yii\web\Controller
{
    public $layout = 'admin';
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        $model = PageTitles::getModel('icon');
        return $this->render('index',['model' => $model]);
    }

}
