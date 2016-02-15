<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Email */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="email-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'id_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_email')->textInput(['maxlength' => true])->label('Tài khoản email') ?>

    <?= $form->field($model, 'password_email')->textInput(['maxlength' => true])->label('Mật khẩu') ?>

    <?php //$form->field($model, 'email_status')->textInput() ?>

    <?php //$form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
