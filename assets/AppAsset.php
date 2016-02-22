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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',        
        //menu css
        'css/lib/menu.css',
        'css/lib/megamenu.css',
        //default css
        'css/lib/styles.css',
        'css/lib/font-awesome.css',
        'css/lib/owl.carousel.css',
        'css/lib/responsive.css',
        'css/lib/bootstrap.css',
        //Product Labels CSS        
        'css/lib/em_productlabels.css',
        // Fancybox CSS -->
        'css/lib/jquery.fancybox.css',
        'css/lib/responsive-tabs.css',
        'css/lib/print.css',
        'css/lib/style_fashion.css',
        'css/lib/color1.css',
      
        
        
        
        
        
        
    ];
    public $js = [
        'lib/jquery-ui/jquery-ui.min.js',
        'js/main.js',
        'lib/bootstrap/js/bootstrap.min.js',
        'lib/select2/js/select2.min.js',        
        'js/jquery.actual.min.js',
        'lib/countdown/jquery.plugin.js',
        'lib/countdown/jquery.countdown.min.js',        
        'lib/owl.carousel/owl.carousel.min.js',
        'lib/jquery.bxslider/jquery.bxslider.min.js',
        'lib/fancyBox/jquery.fancybox.js',
        'js/theme-script.js',
        'js/Countdown.timer.js',
         'js/register/popup.js',
//        'js/tour/hopscotch.js',
//        'js/tour/demo_tour.js',
//        'https://www.google.com/recaptcha/api.js'
        
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
