<?php

namespace app\models;

use Yii;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $code
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'code'], 'required'],
            [['title', 'text', 'code'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'code' => 'Code',
        ];
    }

    public static function getModelByCode($code)
    {
        $one = self::findOne(['code' => $code]);
        if($one)
            return $one;
        else
            throw new NotFoundHttpException('model not found by code - '.$code);
    }
}
