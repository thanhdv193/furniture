<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc muốn xóa "'.$model->title.'" ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'productGroup',
            'productType',
            //'product_category_id',
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
            [
             'attribute' => 'create_date',
             'format'=>'raw',
             'value' =>Yii::$app->formatter->asDatetime($model->create_date, 'php:h:i:s d/m/Y'),
            ],
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
            [
             'attribute' => 'view_count',
             'format'=>'raw',
             'value' => $model->view_count == 0 ? 0 : $model->view_count
            ],
        ],
    ]) ?>

</div>
