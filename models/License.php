<?php

namespace app\models;

use Yii;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "license".
 *
 * @property int $id
 * @property string $title
 * @property string $img_path
 * @property string $position
 */
class License extends \yii\db\ActiveRecord
{
    const  POS_LEFT = 0;
    const  POS_CENTER = 1;
    const  POS_RIGHT = 2;

    public $file;

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
            [['file'], 'file', 'skipOnEmpty' => true],
            [['title', 'img_path'], 'required'],
            [['title', 'img_path', 'position'], 'string', 'max' => 255],
        ];
    }

    public function upload()
    {
        $uploadDir = 'uploads/license/';
        if (!file_exists($uploadDir))
            FileHelper::createDirectory($uploadDir, 0777);

        $fullPath = $uploadDir . $this->file->baseName . '.' . $this->file->extension;

        if ($this->validate(['file']) &&
            $this->file->saveAs($fullPath)) {
            $this->img_path = $fullPath;
            return true;
        }

        return false;
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
            'position' => 'Position',
        ];
    }

    public static function getPosition($pos)
    {
        switch ($pos){
            case self::POS_CENTER:
                return 'center';
            case self::POS_LEFT:
                return 'left';
            case self::POS_RIGHT:
                return 'right';
        }
    }
}
