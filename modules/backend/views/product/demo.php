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
 
 
<h1>jQuery Thumbnail Preview of Image</h1>
 
<form action="" method="post" enctype="multipart/form-data" id="imageuploadFrom">
 <input type="hidden" name="_csrf" value="ME1rdXJyWU1FYAMABApoBnYYXDQaLRp8eS49IDpfH39RGx5NQwcheQ==">
<input name="image1" type="file" class="image" id="image" multiple>
<input name="image2" type="file" class="image" id="image" multiple>
 <button type="submit" class="btn btn-success">Lưu</button>
 
</form>
 
<img class="prevImg" src="">
 
 
</div>
