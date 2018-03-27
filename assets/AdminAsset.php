<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/27/18
 * Time: 9:03 AM
 */

namespace app\assets;


use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}