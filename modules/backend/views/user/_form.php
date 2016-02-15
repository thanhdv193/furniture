<?php

use kartik\file\FileInput;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use iutbay\yii2kcfinder\KCFinderInputWidget;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php
    $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data','accept-charset'=>"UTF-8"], 'id' => 'form_user_create'
    ]);
    ?>
    <?= $form->field($model, 'username')->textInput(['name' => 'username','class'=>'txt_user form-control'])->label('Tên tài khoản') ?>    
    <?php
    ?>
    <?= $form->field($model, 'email')->textInput(['name' => 'email','class'=>'txt_email form-control'])  ?>    
    <?php
// $form->field($model, 'username')->widget(CKEditor::className(),[
//      'editorOptions' => [
//      'preset' => 'full',
//      'inline' => false, //по умолчанию false
//      ],
//      ]); 
    ?> 
    <?php
//    echo FileInput::widget([
//        'name' => 'email',
//        'options' => [
//            'multiple' => true
//        ],
//        'pluginOptions' => [
//            'uploadUrl' => Url::to(['/backend/user/up-load-image']),
//            'maxFileCount' => 1
//        ]
//    ]);
//    
    ?>
    
    <?php if(isset($model['Avatar'])) {?> 
       <img src="/upload/User/Avatar/<?php echo $model['Avatar'] ?>" width="70" alt="">
    <?php }?>
    
    <?php
    echo $form->field($model, 'Avatar')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'allowedFileExtensions' => ['jpg', 'gif', 'png'],
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => FALSE,
            'browseClass' => 'btn btn-primary btn-block btn-file-image',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Chọn avatar'
        ],
        'options' => ['accept' => 'image/*'],
    ]);
    ?>
    <?= $form->field($model, 'gender')->dropDownList(['nam' => 'Nam', 'Nu' => 'Nữ', 'bd' => 'Không xác định'],['class'=>'txt_gender form-control','name'=>'gender'])->label('Giới tính'); ?>
    <?= $form->field($model, 'password_hash')->passwordInput(['class'=>'txt_password form-control','name'=>'password_hash'])->label('Mật khẩu') ?>
    <?= $form->field($model, 'password_repeat')->passwordInput(['class'=>'txt_password form-control'])->label('Nhập lại mật khẩu') ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Lưu' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
