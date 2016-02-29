<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = 'Sửa: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Sửa';
?>
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div> 
    <div class="panel-body">
        <div class="product-update">    
            <?=
            $this->render('_form', [
                'model' => $model,
                'image' => $image,
            ])
            ?>

        </div>
    </div>


</div>
