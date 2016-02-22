<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\AuthItem;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
$this->registerJsFile(Url::base('') . '/js/upload.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>
    
<div class="user-form">

    <?php
    $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'accept-charset' => "UTF-8"]]
    );
    ?>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label("Tên tài khoản <span class='text-required'>(*)</span>") ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?> 
        </div>
    </div>       
    <div class="row">
        <div style="width:100%;margin: auto;    width: 97%;">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?> 
        </div>
        
    </div>    
    <div class="row" style="text-align: Center;">
        <label class="control-label" for="user-password_hash">Ảnh đại diện</label>
    </div>
    <div class="row">
        <div class="avatar">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <span class="btn-file">
                    <span class="fileupload-new"></span>
                    <div class="field-pdcthread-upload has-success">                    
                        <?= $form->field($model, 'avatar')->fileInput()->label(false) ?>
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
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true])->label("Mật khẩu <span class='text-required'>(*)</span>") ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'password_repeat')->passwordInput(['class' => 'txt_password form-control'])->label("Nhập lại mật khẩu <span class='text-required'>(*)</span>") ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            
            <?= $form->field($model, 'gender')->dropDownList(['nam' => 'Nam', 'Nu' => 'Nữ', 'bd' => 'Không xác định'], ['class' => 'txt_gender form-control'])->label('Giới tính'); ?>    
        </div>
        <div class="col-sm-6">
            <?php $model->birthday = date("d/m/Y",$model->birthday);?>
            <?= $form->field($model, 'birthday')->textInput(array('class' => 'form-control datepicker', 'data-date-format' => 'mm/dd/yyyy')) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label("Email <span class='text-required'>(*)</span>") ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>    
        </div>
    </div>        
    <div class="row">
        <div class="col-sm-6">
            <?php
            $userRole = AuthItem::find()->where(['type' => 1])->all();
            $listData = ArrayHelper::map($userRole, 'name', 'name');
            echo $form->field($model, 'group')->dropDownList(
                    $listData, ['prompt' => 'Chọn nhóm...',]);
            ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'active')->dropDownList(['1' => 'Hiển thị', '0' => 'Ẩn'], ['class' => 'txt_gender form-control'])->label('Trang thái'); ?>
        </div>
    </div> 
    <div class="row row-submit">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Lưu' : 'Sửa', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>    
    

    <?php ActiveForm::end(); ?>

</div>

