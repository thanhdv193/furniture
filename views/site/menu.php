<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\components\helpers\Menu;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .items {float:left;}
    .cl_li{
        float:left;
    }
</style>
<div class="" style="float:left;height: 42px;width: 100%;">

<?php echo Menu::menu($data); ?>
</div> 
