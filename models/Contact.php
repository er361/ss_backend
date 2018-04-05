<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $phone
 * @property string $e_mail
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'phone', 'e_mail'], 'required'],
            [['title', 'text', 'phone', 'e_mail'], 'string', 'max' => 255],
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
            'phone' => 'Phone',
            'e_mail' => 'E Mail',
        ];
    }
}
