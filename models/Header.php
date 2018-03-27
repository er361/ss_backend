<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "header".
 *
 * @property int $id
 * @property string $title
 * @property string $muted
 * @property string $img-path
 * @property string $button-text
 */
class Header extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'muted', 'img-path', 'button-text'], 'required'],
            [['title', 'muted', 'img-path', 'button-text'], 'string', 'max' => 255],
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
            'muted' => 'Muted',
            'img-path' => 'Img Path',
            'button-text' => 'Button Text',
        ];
    }
}
