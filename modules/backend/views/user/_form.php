<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?> 
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?> 
    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'password_repeat')->passwordInput(['class'=>'txt_password form-control'])->label('Nhập lại mật khẩu') ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    
    
    <?= $form->field($model, 'gender')->dropDownList(['nam' => 'Nam', 'Nu' => 'Nữ', 'bd' => 'Không xác định'],['class'=>'txt_gender form-control'])->label('Giới tính'); ?>    
    
    <?= $form->field($model, 'birthday')->textInput(array('class'=>'form-control datepicker','data-date-format'=>'mm/dd/yyyy')) ?>
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>    
    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?> 
    <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>
    
     <?= $form->field($model, 'active')->dropDownList(['1' => 'Hiển thị', '0' => 'Ẩn'], ['class' => 'txt_gender form-control'])->label('Trang thái'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Lưu' : 'Sửa', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
