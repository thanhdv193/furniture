<?php

use yii\helpers\Html;
use app\models\ProductGroup;
use app\models\ProductType;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\models\ProductPhoto;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */

$this->registerJsFile(Url::base('') . '/js/upload_demo.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('') . '/ckeditor/ckeditor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('') . '/js/backend/editor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>



<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'accept-charset' => "UTF-8"]]); ?>
    <?php
    if (isset($temp_hash))
    {
        ?>
        <input type="hidden" name="tem_hash" value="<?php echo $temp_hash ?>">
    <?php } ?>
    <div class="row">
        <div class="col-sm-8">
            <div class="panel">
                <div class="panel-body">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'placeholder'=>'ví dụ : Nokia Lumina , Samsung S4']) ?>                    
                </div>
            </div>
            <div class="panel">
                <div class="panel-body">                    
                    <?= $form->field($model, 'content')->textArea(['id' => 'summary', 'rows' => '6']) ?>   
                </div>
            </div>    
            <div class="panel panel-announcement">     
                        <div class="panel-heading">
                            <h4 class="panel-title">Ảnh sản phẩm</h4>
                        </div>
                        <div class="panel-body">
                            <ul class="listimage" >   
                                <?php
                                if ($model['id'] != null)
                                {
                                    ?>
                                    <?php
                                    foreach ($image as $value)
                                    {
                                        ?>
                                        <li class="uk-grid-margin image-item product-update">
                                            <a class="itemview" href="#">
                                                <div class="boximg" style="background-image: url(<?php echo Url::base('http') ?>/<?php echo $value['image_path'] . $value['filename'] ?>)"></div>
                                            </a>
                                            <a alt="ảnh" title="xóa ảnh này" data-value="<?php echo $value['id'] ?>" class="fa fa-close xoaanh" href="#"></a>
                                        </li>                
                                    <?php } ?>   
                                <?php } ?>    
                            </ul> 
                        </div>
                    </div><!-- panel --> 

             <div class="panel">
                 <div class="panel-heading">
                            <h4 class="panel-title">Giá sản phẩm :</h4>
                 </div>
                 <div class="panel-body">                     
                         <div class="col-md-6">
                             <?= $form->field($model, 'price')->textInput() ?>

                         </div>
                         <div class="col-md-6">
                             <?= $form->field($model, 'old_price')->textInput() ?>
                         </div>                                                    
                 </div>
                 <div class="panel-heading">
                            <h4 class="panel-title">Thuộc tính sản phẩm :</h4>
                 </div>
                 <div class="panel-body">
                     <div class="col-md-6">
                         <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>
                         <?= $form->field($model, 'quantity_current')->textInput() ?>
                         
                     </div>                       
                 </div>
                 <div class="panel-body">
                     <div class="btn-group">
                         <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                             Thêm thuộc tính khác <span class="caret"></span>
                         </button>
                         <ul class="dropdown-menu" role="menu">
                             <li><a href="#">Kiểu dáng</a></li>
                             <li><a href="#">Màu sắc</a></li>
                             <li><a href="#">Vật liệu</a></li>
                             <li class="divider"></li>
                             <li><a href="#">Tạo thuộc tính mới</a></li>
                         </ul>
                     </div>
                 </div>
                 
             </div>
             <div class="panel">
                <div class="panel-body">
                    <h2>Tối ưu SEO</h2>
                    <label>Thiết lập các thẻ mô tả giúp khách hàng dễ dàng tìm thấy sản phẩm trên công cụ tìm kiếm như Google.</label>
                    <a class="btn-change-link btn-style-seo pull-right" data-bind="click:OpenSEOSetting">Chỉnh sửa SEO</a>
                    <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'seo_keyword')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'seo_description')->textInput(['maxlength' => true]) ?>
                    
                </div>
            </div>
        </div>  
        <div class="col-sm-4">
            <div class="panel">
                <div class="panel-body">                    
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
                </div>
            </div>    
            
             <div class="panel">
                 <div class="panel-body">
                     <?= $form->field($model, 'is_hethang')->dropDownList(['1' => 'Còn hàng', '0' => 'Hêt hàng'], ['class' => 'txt_gender form-control'])->label('Tình trạng'); ?>
                        <?= $form->field($model, 'is_active')->dropDownList(['1' => 'Hiển thị', '0' => 'Ẩn'], ['class' => 'txt_gender form-control'])->label('Trang thái'); ?>
                 </div>
             </div>     
        </div>
    </div>                        





    

    <div class="form-group">
         <?= Html::submitButton($model->isNewRecord ? 'Lưu' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
        <input type="button" name="back" value="Hủy" class="btn btn-default btn-quirk" >
    </div>

<?php ActiveForm::end(); ?>

</div>

