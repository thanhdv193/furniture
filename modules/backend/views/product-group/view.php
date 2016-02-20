<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductGroup */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Nhóm sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-group-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            //'z_index',            
            [
             'attribute' => 'create_date',
             'format'=>'raw',
             'value' =>Yii::$app->formatter->asDatetime($model->create_date, 'php:h:i:s d/m/Y'),
            ],
            [
             'attribute' => 'active',
             'format'=>'raw',
             'value' => $model->active == 1 ? 'Hiện' : 'Ẩn'
            ],
        ],
    ]) ?>

</div>
