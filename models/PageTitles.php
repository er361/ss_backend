<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page_titles".
 *
 * @property int $id
 * @property string $text
 * @property string $code
 */
class PageTitles extends \yii\db\ActiveRecord
{
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
}
