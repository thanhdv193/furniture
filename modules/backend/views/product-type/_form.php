<?php

use yii\helpers\Html;
use app\models\ProductType;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-type-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="">
        
    </div>
    <?php
    $categoryParent = ProductType::find()->where(['z_index' => 0])->all();
    $listData = ArrayHelper::map($categoryParent, 'id', 'title');
    echo $form->field($model, 'parent_id')->dropDownList(
            $listData, ['prompt' => 'Select...',])->label('Danh mục cha');
    ?>        
    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Tiêu đề'); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6])->label('Mô tả'); ?>

    <?php //$form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'z_index')->textInput() ?>

    <?php //$form->field($model, 'is_menu')->textInput() ?>

    <?php //$form->field($model, 'olink')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'create_date')->textInput()->label('Ng'); ?>
    
    <?= $form->field($model, 'active')->dropDownList(['1' => 'Hiển thị', '0' => 'Ẩn'], ['class' => 'txt_gender form-control'])->label('Trang thái'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Lưu' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
