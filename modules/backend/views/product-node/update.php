<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductNode */

$this->title = 'Update Product Node: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Nodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->product_node_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-node-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
