<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductType */

$this->title = 'Sửa: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Danh mục sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Sửa';
?>
<div class="product-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
