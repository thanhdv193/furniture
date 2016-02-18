<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_group_id',
            'product_type_id',
            'product_category_id',
            'title',
            // 'link',
            // 'olink',
            // 'olink2',
            // 'description:ntext',
            // 'content:ntext',
            // 'photo',
            // 'seo_title',
            // 'seo_keyword',
            // 'seo_description',
            // 'seo_photo_alt',
            // 'is_hethang',
            // 'is_new',
            // 'is_top',
            // 'create_date',
            // 'is_active',
            // 'discount',
            // 'discount_bonus',
            // 'price',
            // 'time_left',
            // 'z_index',
            // 'code_product',
            // 'size',
            // 'origin',
            // 'tags:ntext',
            // 'old_price',
            // 'quantity_current',
            // 'view_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
