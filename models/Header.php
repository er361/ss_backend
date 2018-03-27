<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "header".
 *
 * @property int $id
 * @property string $title
 * @property string $muted
 * @property string $img_path
 * @property string $button_text
 */
class Header extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'header';
    }

    public function upload()
    {
        $filePath = 'uploads/header/' . $this->file->baseName . '.' . $this->file->extension;
        if ($this->file->saveAs($filePath)) {
            $this->img_path = $filePath;
            return true;
        } else
            return false;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'muted', 'img_path', 'button_text'], 'required'],
            [['title', 'muted', 'img_path', 'button_text'], 'string', 'max' => 255],
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
            'img_path' => 'Img Path',
            'button_text' => 'Button Text',
        ];
    }
}
