<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

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
            'product_group_id',
            'product_type_id',
            'product_category_id',
            'title',
            //'link',
            //'olink',
            //'olink2',
            'description:ntext',
            'content:ntext',
            'photo',
            'seo_title',
            'seo_keyword',
            'seo_description',
            'seo_photo_alt',
            'is_hethang',
            //'is_new',
            //'is_top',
            'create_date',
            'is_active',
            'discount',
            'discount_bonus',
            'price',
            //'time_left',
            //'z_index',
            //'code_product',
            'size',
            //'origin',
            'tags:ntext',
            'old_price',
            'quantity_current',
            'view_count',
        ],
    ]) ?>

</div>
