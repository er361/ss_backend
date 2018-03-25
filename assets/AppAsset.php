<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        "vendor/bootstrap/css/bootstrap.min.css",
        "vendor/font-awesome/css/font-awesome.min.css",
        'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
        'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic',
        "vendor/magnific-popup/magnific-popup.css",
        "css/creative.min.css",
//        "css/common.min.css"
    ];

    public $js = [
        "vendor/jquery/jquery.min.js",
        "vendor/bootstrap/js/bootstrap.bundle.min.js",
        "vendor/jquery-easing/jquery.easing.min.js",
        "vendor/scrollreveal/scrollreveal.min.js",
        "vendor/magnific-popup/jquery.magnific-popup.min.js",
        "js/creative.min.js",
        "js/common.js",
        "https://api-maps.yandex.ru/2.1/?lang=ru_RU",
        "js/map_setup.js"
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
