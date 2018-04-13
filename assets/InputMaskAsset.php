<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 4/12/18
 * Time: 4:19 PM
 */

namespace app\assets;


use yii\web\AssetBundle;

class InputMaskAsset extends AssetBundle
{
    public $sourcePath = '@npm/inputmask';
    public $js = [
        'dist/min/inputmask/inputmask.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}