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

$this->registerJsFile(Url::base('') . '/js/upload_img.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('').'/ckeditor/ckeditor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('').'/js/backend/editor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
      <?php if(isset($temp_hash)) { ?>
        <input type="hidden" name="tem_hash" value="<?php echo $temp_hash ?>">
    <?php }?>
    
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    
    <?php //$form->field($model, 'product_group_id')->textInput() ?>
    <?php
    $productGroup = ProductGroup::find()->where(['active' => 1])->all();
    $listData = ArrayHelper::map($productGroup, 'id', 'title');
    echo $form->field($model, 'product_group_id')->dropDownList(
            $listData, ['prompt' => 'Select...',])->label('Nhóm sản phẩm');
    ?>  
    
    <?php
    $productType = ProductType::find()->where(['active' => 1])->all();
    $listData = ArrayHelper::map($productType, 'id', 'title');
    echo $form->field($model, 'product_type_id')->dropDownList(
            $listData, ['prompt' => 'Select...',])->label('Chuyên mục');
    ?>  
     <?= $form->field($model, 'product_category_id')->textInput() ?>
    
    <?php //$form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
    <div class="panel panel-announcement">     
        <div class="panel-heading">
            <h4 class="panel-title">Ảnh sản phẩm</h4>
        </div>
        <div class="panel-body">
            <ul class="listimage" >
                <li data-id="630" class="image-item">
                    <a class="itemview" href="upload/vi-toi-dep-trai--14556094937656.jpg">
                        <div class="boximg" style="background-image: url('http://cantholink.com/menu/upload/vi-toi-dep-trai--14556094937656.jpg')">
                        </div></a>
                    <a alt="vi-toi-dep-trai--14556094937656.jpg" class="uk-icon-remove xoaanh"></a>
                </li>                
                <li data-id="-1" class="image-item box-select-img">
                    <input type="file"  id="upload">                         
                </li>

            </ul> 
        </div>
    </div><!-- panel -->    
   
    
    
    <?php //$form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'olink')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'olink2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['id'=>'summary2','rows' => '6']) ?>

    <?= $form->field($model, 'content')->textArea(['id'=>'summary','rows' => '6']) ?>

    <?php //$form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
        
    <?= $form->field($model, 'is_hethang')->dropDownList(['1' => 'Còn hàng', '0' => 'Hêt hàng'], ['class' => 'txt_gender form-control'])->label('Tình trạng'); ?>

    <?php //$form->field($model, 'is_new')->textInput() ?>

    <?php //$form->field($model, 'is_top')->textInput() ?>
    
    <?php //$form->field($model, 'discount')->textInput() ?>

    <?php //$form->field($model, 'discount_bonus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>
    
    <?= $form->field($model, 'old_price')->textInput() ?>

    <?php //$form->field($model, 'time_left')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'z_index')->textInput() ?>

    <?php //$form->field($model, 'code_product')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'origin')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'tags')->textarea(['rows' => 6]) ?>

    

    <?= $form->field($model, 'quantity_current')->textInput() ?>
    
    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_photo_alt')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'is_active')->dropDownList(['1' => 'Hiển thị', '0' => 'Ẩn'], ['class' => 'txt_gender form-control'])->label('Trang thái'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
