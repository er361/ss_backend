<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 4/12/18
 * Time: 12:37 AM
 */

namespace app\assets;


use yii\web\AssetBundle;

class Bs4Asset extends AssetBundle
{
    public $basePath = '@webroot/vendor/bootstrap';
    public $baseUrl = '@web/vendor/bootstrap';
    public $css = [
        'css/bootstrap.min.css'
    ];
    public $js = [
        'js/bootstrap.bundle.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}