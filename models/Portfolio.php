<?php

namespace app\models;

use function Sodium\add;
use Yii;
use yii\base\ErrorException;
use yii\db\Exception;
use yii\helpers\FileHelper;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $thumb_img_path
 * @property string $full_img_path
 * @property string $title
 * @property int $pos
 * * @property string $category
 */
class Portfolio extends \yii\db\ActiveRecord
{
    public $file;

    public $desc;


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
            [['file'], 'file', 'skipOnEmpty' => true],
            [['full_img_path', 'title'], 'required'],
            [['full_img_path', 'title', 'category'], 'string', 'max' => 255],
            [['pos'], 'integer'],
        ];
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
//            'thumb_img_path' => 'Thumb Img Path',
            'full_img_path' => 'Full Img Path',
            'title' => 'Title',
            'pos' => 'Pos',
            'category' => 'Category',
        ];
    }

    public function upload()
    {
        $uploadDir = 'uploads/portfolio/';
        if (!file_exists($uploadDir))
            FileHelper::createDirectory($uploadDir, 0777);

        $fullPath = $uploadDir . $this->file->baseName . '.' . $this->file->extension;

        if ($this->validate(['file'])) {
            if($this->file->saveAs($fullPath)){
                $this->full_img_path = $fullPath;
                return true;
            }
        }else{
            var_dump($this->getErrors());
            die('ss');
        }


    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->title;
    }
}
