<?php

$params = require(__DIR__ . '/params.php');

use \yii\web\Request;
$baseUrl = str_replace('/web', '', (new Request)->getBaseUrl());
$config = [
    'id' => 'shop',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'bootstrap' => ['gii'],
    'language' => 'vi-VN',
    'sourceLanguage' => 'en',
    //  'homeUrl'=>'/basic',
    'defaultRoute' => 'fontend/home/index',
   // 'defaultRoute' => 'index.php/site/login',
//    ['catAll']=>['backend/user/index'],
    'components' => [

        //login facebook and google.com
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\GoogleOpenId'
                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => '446743135489351',
                    'clientSecret' => 'f2ca1e058bff4046b82b160fc79c3ab0',
                ],
            // etc.
            ],
        ],
        //the end login facebook google
        'request' => [
             'baseUrl' => $baseUrl,
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'akZEZqxGC6T0wByyllGkBJza8bx9o0jp',
            
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'formatter' => [            
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'EUR',
            'dateFormat' => 'php:d-m-Y',
            'datetimeFormat' => 'php:d-m-Y H:i a',
            'timeFormat' => 'php:H:i A',
            'timeZone' => 'Asia/Ho_Chi_Minh',
        ],
//        'mailer' => [
//            'class' => 'yii\swiftmailer\Mailer',           
//            'useFileTransport' => false,
//            'transport' => [
//                'class' => 'Swift_SmtpTransport',
//                'host' => 'smtp.gmail.com',
//                'username' => 'dovanthanh07051993@gmail.com',
//                'password' => 'thanhhihi',
//                'port' => '587',
//                'encryption' => 'tls',
//            ],
//        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            // 'enableStrictParsing' => 'true',
//            'suffix' => '.html',
            'rules' => [
                'thumbs/<path:.*>' => 'site/thumb',
                '<controller:\w+>/<title:[\d\w\-_]+>-<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                'dang-nhap-quan-tri.html' =>'site/login-admin',
                'san-pham/<title>-<id:\d+>.html' => 'fontend/product/product-detail',
                'mua-hang/<title>-<id:\d+>' => 'fontend/cart/add',
                'gio-hang.html' => 'fontend/cart/index',
                'don-hang.html' => 'fontend/orders/index',
                'thong-bao-don-hang.html' => 'fontend/orders/index',
//                'danh-muc/<title>-<id:\d+>_<page:\d+>' => 'fontend/product/product-category',
                'chuyen-muc/<title>-<id:\d+>-<page:\d+>.html' => 'fontend/product/product-category',
                'lien-he.html' => 'fontend/home/contact',
                'gioi-thieu.html' => 'fontend/home/about',                
                'tim-kiem/<title>-<id:\d+>-<page:\d+>.html' => '/fontend/home/search',
                'dang-ky-tai-khoan.html' => 'fontend/home/register',
                'home.html' => 'fontend/home/index',
                '<alias:login|logout|register>' => 'account/<alias>',
                '<alias:about>' => 'site/<alias>',
                'debug/<controller>/<action>' => 'debug/<controller>/<action>',
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        // 'class' => 'yii\rbac\PhpManager',
        ],
    ],
    'modules' => [

        'gii' => 'yii\gii\Module',
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu', // avaliable value 'left-menu', 'right-menu' and 'top-menu'
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'app\models\User',
                    'idField' => 'id'
                ],
            ],
            'menus' => [
                'assignment' => [
                    'label' => 'Grand Access' // change label
                ],
            // 'rule' => null, // disable menu
            ],
        ],
        'backend' => [
            'class' => 'app\modules\backend\Backend',
            'layout' => '/backend_layout',
        ],
        'fontend' => [
            'layout' => '/fontend_layout',
            'class' => 'app\modules\fontend\Fontend',
        ],
    ],
//    'as access' => [
//        'class' => 'mdm\admin\components\AccessControl',
//        'allowActions' => [
//            'site/*',
//            'admin/*',
//            //'backend/*',
//            //'user/*',
//            'gii/*',
//            'fontend/*',
//            //'backend/*',
//        ],
//    ],
    
    'aliases' => [
        '@mdm/admin' => 'app/vendor/mdmsoft',
    ],
    'params' => $params,
];

if (YII_ENV_DEV)
{
    // configuration adjustments for 'dev' environment
    // $config['bootstrap'][] = 'debug';
    // $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
