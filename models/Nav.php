<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nav".
 *
 * @property int $id
 * @property string $about
 * @property string $services
 * @property string $portfolio
 * @property string $license
 * @property string $contact
 */
class Nav extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nav';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['about', 'services', 'portfolio', 'license', 'contact'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about' => 'About',
            'services' => 'Services',
            'portfolio' => 'Portfolio',
            'license' => 'License',
            'contact' => 'Contact',
        ];
    }
}
