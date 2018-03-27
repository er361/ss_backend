<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $thumb_img_path
 * @property string $full_img_path
 * @property string $title
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['thumb_img_path', 'full_img_path', 'title'], 'required'],
            [['thumb_img_path', 'full_img_path', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'thumb_img_path' => 'Thumb Img Path',
            'full_img_path' => 'Full Img Path',
            'title' => 'Title',
        ];
    }
}
