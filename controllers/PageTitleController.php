<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 4/2/18
 * Time: 10:03 PM
 */

namespace app\controllers;


use app\models\PageTitles;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\UploadedFile;

class PageTitleController extends Controller
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'index' => ['POST']
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        $code = ArrayHelper::getValue($_POST, 'PageTitles.code');
        $session = \Yii::$app->session;

        $model = PageTitles::getModel($code);
        $model->load(\Yii::$app->request->post());
        $file = UploadedFile::getInstance($model,'file');
        if($file){
            $model->file = $file;
            $model->upload();
        }
        if ($model->save())
            $session->setFlash('title','title created successfully');

        $this->redirect(['admin/index']);
    }
}