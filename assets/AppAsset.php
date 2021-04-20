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
    public $baseUrl = '@web/eterna';
    public $css = [
        'assets/vendor/bootstrap/css/bootstrap.min.css',
        'assets/vendor/icofont/icofont.min.css',
        'assets/vendor/boxicons/css/boxicons.min.css',
        'assets/vendor/animate.css/animate.min.css',
        'assets/vendor/owl.carousel/assets/owl.carousel.min.css',
        'assets/vendor/venobox/venobox.css',
        'assets/css/style.css',
    ];
    public $js = [
        'assets/vendor/jquery/jquery.min.js',
        'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'assets/vendor/jquery.easing/jquery.easing.min.js',
        'assets/vendor/php-email-form/validate.js',
        'assets/vendor/jquery-sticky/jquery.sticky.js',
        'assets/vendor/owl.carousel/owl.carousel.min.js',
        'assets/vendor/waypoints/jquery.waypoints.min.js',
        'assets/vendor/counterup/counterup.min.js',
        'assets/vendor/isotope-layout/isotope.pkgd.min.js',
        'assets/vendor/venobox/venobox.min.js',
        'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
