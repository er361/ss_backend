<?php

namespace app\models;

use Yii;
use yii\base\UserException;

/**
 * This is the model class for table "header".
 *
 * @property int $id
 * @property string $title
 * @property string $muted
 * @property string $img_path
 * @property string $button_text
 * @property string $video_path
 * @property string $background_type
 */
class Header extends \yii\db\ActiveRecord
{
    public $imgFile;
    public $videoFile;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'header';
    }

    public function upload($fileAttr = 'imgFile', $dbAttr = 'img_path')
    {
        if ($this->validate($fileAttr)) {
            $filePath = 'uploads/header/' . $this->$fileAttr->baseName . '.' . $this->$fileAttr->extension;
            if ($this->$fileAttr->saveAs($filePath)) {
                $this->$dbAttr = $filePath;
                return true;
            } else
                return false;
        } else {
            throw new UserException($this->getFirstError('file'));
        }
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imgFile'], 'file', 'mimeTypes' => 'image/*', 'maxSize' => 10240000],
            [['videoFile'], 'file'],
            [['title', 'muted', 'img_path', 'button_text'], 'required'],
            [['title', 'muted', 'img_path', 'button_text', 'video_path', 'background_type'], 'string', 'max' => 255],
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
            'imgFile' => 'Image',
            'videoFile' => 'Video',
            'video_path' => 'Video Path',
            'background_type' => 'Background Type',
        ];
    }
}
