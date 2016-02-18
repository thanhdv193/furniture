<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_group_id') ?>

    <?= $form->field($model, 'product_type_id') ?>

    <?= $form->field($model, 'product_category_id') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'olink') ?>

    <?php // echo $form->field($model, 'olink2') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'seo_title') ?>

    <?php // echo $form->field($model, 'seo_keyword') ?>

    <?php // echo $form->field($model, 'seo_description') ?>

    <?php // echo $form->field($model, 'seo_photo_alt') ?>

    <?php // echo $form->field($model, 'is_hethang') ?>

    <?php // echo $form->field($model, 'is_new') ?>

    <?php // echo $form->field($model, 'is_top') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'discount_bonus') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'time_left') ?>

    <?php // echo $form->field($model, 'z_index') ?>

    <?php // echo $form->field($model, 'code_product') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'origin') ?>

    <?php // echo $form->field($model, 'tags') ?>

    <?php // echo $form->field($model, 'old_price') ?>

    <?php // echo $form->field($model, 'quantity_current') ?>

    <?php // echo $form->field($model, 'view_count') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
