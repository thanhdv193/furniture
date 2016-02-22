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
        'lib/Hover/hover.css',
        'lib/fontawesome/css/font-awesome.css',
        'lib/weather-icons/css/weather-icons.css',
        'lib/ionicons/css/ionicons.css',
        'lib/jquery-toggles/toggles-full.css',
        'lib/morrisjs/morris.css',
        'css/backend/backend.css',
        'lib/dropzone/dropzone.css',
         'css/upload_image.css',
                
    ];
    public $js = [        
        'lib/jquery-ui/jquery-ui.js',
        'lib/modernizr/modernizr.js',
        'lib/bootstrap/js/bootstrap.js',
        'lib/jquery-toggles/toggles.js',
        'lib/morrisjs/morris.js',
        'lib/raphael/raphael.js',
//       'lib/flot/jquery.flot.js',
//       'lib/flot/jquery.flot.resize.js',
//       'lib/flot-spline/jquery.flot.spline.js',
        'lib/jquery-knob/jquery.knob.js',
        'lib/dropzone/dropzone.js',
        //'lib/timepicker/jquery.timepicker.js',
        'lib/jquery-maskedinput/jquery.maskedinput.js',
        'js/index.js',
        'js/dashboard.js',
        //'js/upload_img.js',
        
        
        
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
