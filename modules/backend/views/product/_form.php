<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ProductGroup;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use yii\helpers\Url;
use mihaildev\ckeditor\CKEditor;
use iutbay\yii2kcfinder\KCFinderInputWidget;
use app\models\ProductCategory;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
$this->registerJsFile(Url::base('').'/ckeditor/ckeditor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('').'/js/backend/editor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<link href="<?= Url::base('http') ?>/css/backend/backend.css" rel="stylesheet">

<div class="product-form pull-right product-form-w">

    <?php
    $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'accept-charset' => "UTF-8"], 'id' => 'form_product_create']
    );
    ?>
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <h4>Thông tin sản phẩm</h4>
            <p class="text-muted">Cung cấp thông tin về tên, mô tả loại sản phẩm và nhà sản xuất để phân loại sản phẩm này.</p>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="group-p-infor container-fluid">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Nhập tên sản phẩm'])->label('Tên sản phẩm') ?>
                <?php
//                $form->field($model, 'content')->widget(CKEditor::className(), [
//                    'editorOptions' => [
//                        'preset' => 'advanced',
//                        'inline' => false,
//                        'filebrowserUploadUrl' => Yii::$app->getUrlManager()->createUrl('/images/test')
//                    ],
//                ])->label('Nội dung');
                
                ?> 
                <?= $form->field($model, 'content')->textArea(['id'=>'summary','rows' => '6']) ?>
                <div>
                    <div class="col-md-6">
                        <?php
                        $productCate = ProductCategory::find()->where(['active' => 1])->all();
                        $listData = ArrayHelper::map($productCate, 'product_category_id', 'name');
                        echo $form->field($model, 'product_category_id')->dropDownList(
                                $listData, ['prompt' => 'Select...',])->label('Chuyên mục');
                        ?>

                    </div>
                    <div class="col-md-6">
                        <?php
                        $productGroup = ProductGroup::find()->where(['active' => 1])->all();
                        $listData = ArrayHelper::map($productGroup, 'product_group_id', 'name');
                        echo $form->field($model, 'product_group_id')->dropDownList(
                                $listData, ['prompt' => 'Select...',])->label('Nhóm sản phẩm');
                        ?>

                    </div>

                </div>

            </div>
        </div>

    </div>    
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <h4>Ảnh</h4>
            <p class="text-muted">Đăng ảnh cho sản phẩm</p>
            <p class="text-muted">Lưu ý: Size mỗi file ảnh không được vượt quá 1 MB.</p>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="group-p-infor container-fluid" style="margin-top: 20px;min-height: 200px;">
                <?=
                $form->field($model, 'image[]')->widget(FileInput::classname(), [
                    'options' => ['multiple' => true, 'accept' => 'image/*'],
                    'pluginOptions' => [
                        'previewFileType' => 'image',
                        'showUpload' => false,
                        'maxFileCount' => 10,
                        'browseLabel' => 'Chọn ảnh'
                    ],
                ])->label('Ảnh ');
                ?>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <h4>Quản lý tùy chọn</h4>
            <p class="text-muted">Quản lý tùy chọn</p>

        </div>
        <div class="col-md-8 col-lg-9">
            <div class="group-p-infor container-fluid" style="margin-top: 20px;">
                <?= $form->field($model, 'quantity_current')->textInput(['maxlength' => true, 'placeholder' => 'Nhập số lượng'])->label('Số lượng') ?>
                <?php
//    echo FileInput::widget([
//        'name' => 'image_id[]',
//        'options' => [
//            'multiple' => true
//        ],
//        'pluginOptions' => [
//            'uploadUrl' => Url::to(['/backend/product/up-load-image']),
//            'maxFileCount' => 10
//        ]
//    ]);
                ?>
               


                <div class="form-group field-product-price">
                    <label class="control-label" for="product-price">Giá mới</label>
                    <input type="text" id="price" maxlength="19" value="" class="form-control" name="Product[price]" placeholder="Nhập giá">                    
                    <div class="trans_price" id="tprice"></div>
                    <div class="help-block"></div>
                </div>
                <?php //$form->field($model, 'price')->textInput(['placeholder' => 'Nhập giá'])->label('Giá mới') ?>

                <?= $form->field($model, 'old_price')->textInput(['placeholder' => 'Nhập giá'])->label('Giá cũ') ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <h4>Tối ưu SEO</h4>
            <p class="text-muted">Thiết lập tiêu đề trang, thẻ mô tả, đường dẫn. Những thông tin này xác định cách bài viết xuất hiện trên công cụ tìm kiếm.</p>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="group-p-infor container-fluid" style="margin-top: 20px; margin-bottom: 20px;">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>               
                <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>
                <?php //$form->field($model, 'h1')->textInput(['maxlength' => true])  ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-lg-3">
            <h4>Trạng thái</h4>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="group-p-infor container-fluid" style="margin-top: 20px; margin-bottom: 20px;">


                <?php //$form->field($model, 'title')->textInput(['maxlength' => true])  ?>

                <?php //$form->field($model, 'h1')->textInput(['maxlength' => true])  ?>

                <?php // $form->field($model, 'meta_description')->textInput(['maxlength' => true])  ?>




                <?php //$form->field($model, 'announce')->textarea(['rows' => 4]) ?>


                <?php //$form->field($model, 'sort_order')->textInput()->label('Thứ tự')  ?>

                <?= $form->field($model, 'active')->dropDownList(['1' => 'Hiển thị', '0' => 'Ẩn'], ['class' => 'txt_gender form-control', 'name' => 'active'])->label(''); ?>
            </div>
        </div>
    </div>

    <div class="form-group" style="margin: 0 auto;text-align: center;padding: 5px 5px 10px 5px;">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
