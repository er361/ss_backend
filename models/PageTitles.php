<?php

namespace app\models;

use Yii;
use yii\base\ErrorException;
use yii\base\UserException;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * This is the model class for table "page_titles".
 *
 * @property int $id
 * @property string $text
 * @property string $code
 */
class PageTitles extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page_titles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'code'], 'string', 'max' => 255],
        ];
    }

    public function upload()
    {
        /* @var $file UploadedFile */

        $file = $this->file;
        if($file == null)
            throw new ErrorException('file not loaded');
        $uploadPath = 'uploads/icons/' . $file->baseName . '.' . $file->extension;
        if($file->saveAs($uploadPath)){
            $this->text = $uploadPath;
            return true;
        }
        throw new ErrorException('file not saved');

    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'code' => 'Code',
        ];
    }

    public static function getIcon()
    {
        $one = self::findOne(['code' => 'icon']);
        if($one)
            return $one->text;
        throw new NotFoundHttpException('model with icon code not found');
    }

    public static function getModel($code)
    {
        $one = PageTitles::findOne(['code' => $code]);
        if ($one)
            return $one;
        else {
            $pageTitles = new PageTitles(['code' => $code]);
            return $pageTitles;
        }
    }

}
