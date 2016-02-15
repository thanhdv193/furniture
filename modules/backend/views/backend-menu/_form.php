<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use app\models\BackendMenu;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\BackendMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="backend-menu-form">

    <?php
    $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data'], 'id' => 'form_menu_create'
    ]);
    ?>
    <?php
    $menu = BackendMenu::find()->where(['parent_id' => 0])->all();
    $listData = ArrayHelper::map($menu, 'id', 'name');
    echo $form->field($model, 'parent_id')->dropDownList(
            $listData, ['prompt' => 'Select...','name'=>'parent_id'])->label('Menu cha') ;
    ?>
   
    <?= $form->field($model, 'name')->textInput(['name' => 'name','class'=>'txt_user form-control','maxlength' => true])->label('Tên menu')  ?>

    <?= $form->field($model, 'route')->textInput(['name' => 'route','class'=>'txt_user form-control','maxlength' => true]) ?>    
    <?php
    echo $form->field($model, 'icon')->widget(FileInput::classname(), [
        'pluginOptions' => [
            'allowedFileExtensions' => ['jpg', 'gif', 'png'],
            'showCaption' => false,
            'showRemove' => false,
            'showUpload' => FALSE,
            'browseClass' => 'btn btn-primary btn-block btn-file-image',
            'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
            'browseLabel' => 'Chọn icon'
        ],
        'options' => ['accept' => 'image/*'],
    ]);
    ?>

    <?= $form->field($model, 'sort_order')->textInput(['name' => 'sort_order','class'=>'txt_user form-control','maxlength' => true]) ?>   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
