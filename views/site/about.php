<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\ProductBoxOneWidget;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile(Url::base('').'/js/jquery.countdown.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('').'/js/index.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<div id="getting-started"></div>
