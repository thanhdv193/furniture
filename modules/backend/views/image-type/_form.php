<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImageType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="image-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'object_type')->textInput(['maxlength' => true])->label('Loại ảnh') ?>

    <?= $form->field($model, 'object_name')->textInput(['maxlength' => true])->label('Tên loại ảnh') ?>    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
