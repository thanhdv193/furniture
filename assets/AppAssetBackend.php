<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetBackend extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/backend/layout/styles.css',
        'css/backend/fonts/font-awesome/css/font-awesome.min.css',
        
        
    ];
    public $js = [
        'js/main.js',
        'lib/bootstrap/js/bootstrap.min.js',
        'js/backend/plugins/jquery-slimscroll/jquery.slimscroll.js',
        'js/backend/plugins/sparklines/jquery.sparklines.min.js',
        'js/backend/plugins/jstree/dist/jstree.min.js',
        'js/backend/plugins/codeprettifier/prettify.js',
        'js/backend/plugins/bootstrap-switch/bootstrap-switch.js',
        'js/backend/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js',
        'js/backend/plugins/iCheck/icheck.min.js',
        'js/backend/enquire.min.js',
        'js/backend/plugins/bootbox/bootbox.js',
        'js/backend/application.js',
        'js/backend/demo.js',
        'js/backend/demo-switcher.js',
        'js/backend/plugins/simpleWeather/jquery.simpleWeather.min.js',
//        'js/translate-price/translatePrice.js'
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
