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
class BackendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/master';
    public $css = [
        'material-dashboard.css',
        'demo/demo.css',
        
    ];
    public $js = [
        'master/core/jquery.min.js',
        'master/core/popper.min.js',
        'master/core/bootstrap-material-design.min.js',
        'master/plugins/perfect-scrollbar.jquery.min.js',
        'master/plugins/moment.min.js',
        'master/plugins/sweetalert2.js',
        'master/plugins/jquery.validate.min.js',
        'master/plugins/jquery.bootstrap-wizard.js',
        'master/plugins/bootstrap-selectpicker.js',
        'master/plugins/bootstrap-datetimepicker.min.js',
        'master/plugins/jquery.dataTables.min.js',
        'master/',
        'master/',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
