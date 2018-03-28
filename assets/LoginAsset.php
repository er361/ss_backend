<?php
/**
 * Created by PhpStorm.
 * User: sf
 * Date: 3/28/18
 * Time: 11:50 AM
 */

namespace app\assets;


use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        "vendor/bootstrap/css/bootstrap.min.css",
        "vendor/font-awesome/css/font-awesome.min.css",
        'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic',
//        "vendor/magnific-popup/magnific-popup.css",
//        "css/creative.min.css",
//        "css/creative.css",
//        "css/common.min.css"
    'css/signin.css'
    ];
}