<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductNode */

$this->title = 'Create Product Node';
$this->params['breadcrumbs'][] = ['label' => 'Product Nodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-node-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
