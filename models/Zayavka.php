<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zayavka".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $e_mail
 * @property string $area
 */
class Zayavka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zayavka';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['name', 'phone', 'e_mail', 'area'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'e_mail' => 'E Mail',
            'area' => 'Area',
        ];
    }
}
