<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\BannerSlide */
/* @var $form yii\widgets\ActiveForm */
$this->registerJsFile(Url::base('') . '/js/upload.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('').'/ckeditor/ckeditor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('').'/js/backend/editor.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<div class="banner-slide-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'accept-charset' => "UTF-8"]]); ?>
    <div class="row" style="text-align: Center;">
        <label class="control-label" for="user-password_hash">Ảnh</label>
    </div>
    <div class="row">
        <div class="avatar">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <span class="btn-file">
                    <span class="fileupload-new"></span>
                    <div class="field-pdcthread-upload has-success">                    
                        <?= $form->field($model, 'image')->fileInput()->label(false) ?>                        
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail ">
                        <div class="fileupload-new ">
                            <img src="/upload/avatar/icon-upload-avatar.png" alt="">

                        </div>
                    </div>
                </span>
            </div>
        </div>
    </div>
    

    <?php // $form->field($model, 'create_date')->textInput() ?>
    <?= $form->field($model, 'description')->textArea(['id'=>'summary','rows' => '6']) ?>

    <?= $form->field($model, 'sort_order')->textInput() ?>

    <?php // $form->field($model, 'user_id')->textInput() ?>
    
    <?= $form->field($model, 'active')->dropDownList(['1' => 'Hiển thị', '0' => 'Ẩn'], ['class' => 'txt_gender form-control'])->label('Trang thái'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
