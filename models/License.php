<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "license".
 *
 * @property int $id
 * @property string $title
 * @property string $img_path
 */
class License extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'license';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'img_path'], 'required'],
            [['title', 'img_path'], 'string', 'max' => 255],
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
            'img_path' => 'Img Path',
        ];
    }
}
