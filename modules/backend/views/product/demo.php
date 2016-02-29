<?php

use yii\helpers\Html;
use app\models\ProductGroup;
use app\models\ProductType;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */

$this->registerJsFile(Url::base('') . '/js/upload_demo.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<div class="lessoncup">
   
    <form action="" method="post" enctype="multipart/form-data" id="imageuploadFrom">
        <input type="hidden" name="_csrf" value="ME1rdXJyWU1FYAMABApoBnYYXDQaLRp8eS49IDpfH39RGx5NQwcheQ==">
        <div class="panel panel-announcement">     
        <div class="panel-heading">
            <h4 class="panel-title">Ảnh sản phẩm</h4>
        </div>
        <div class="panel-body">
            <ul class="listimage" >                
<!--                <input type='file' name='image[]' multiple />-->
<!--                <li data-id="-1" class="image-item box-select-img">
                    <input type="file"  class="upload">                         
                </li>-->
                
            </ul> 
        </div>
    </div><!-- panel --> 
        <button type="submit" class="btn btn-success">Lưu</button>

    </form>
 
<img class="prevImg" src="">
 
 
</div>
