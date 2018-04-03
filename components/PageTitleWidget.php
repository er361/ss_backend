<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 4/2/18
 * Time: 9:10 PM
 */

namespace app\components;


use app\models\PageTitles;
use yii\base\UserException;
use yii\base\Widget;

class PageTitleWidget extends Widget
{
    public $code;

    public function init()
    {
        parent::init();

        if ($this->code == null)
            throw new UserException('code required param');
    }

    public function run()
    {
        $model = $this->getModel();

        return $this->render('page_title', ['model' => $model]);
    }

    public function getModel()
    {
        $one = PageTitles::findOne(['code' => $this->code]);
        if($one)
            return $one;
        else {
            $pageTitles = new PageTitles(['code' => $this->code]);
            return $pageTitles;
        }
    }
}