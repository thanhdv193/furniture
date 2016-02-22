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
        'js/lib/jquery.lazyload.min.js',
        'js/lib/owl.carousel.js',
        'js/lib/ios-orientationchange-fix.js',
        'js/lib/jquery.hoverIntent.js',
        'js/lib/selectUl.js',
        'js/lib/jquery.ba-throttle-debounce.js',
        'js/lib/em0131.js',
        'js/lib/megamenu.js',
        'js/lib/jquery.custom.responsiveTabs.js',
        'js/lib/jquery.fancybox.js',
        'js/lib/custom.js',
       
        
        
        
        
        
        
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
