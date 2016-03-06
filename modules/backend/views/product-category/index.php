<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Categories';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="product-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'link',
            'is_new',
            // 'is_menu',
            // 'z_index',
            // 'olink',
            // 'seo_title',
            // 'seo_description',
            // 'seo_keyword',
            
            ['class' => 'yii\grid\ActionColumn',
                                'header' => 'Thao tác',
                                'headerOptions' => ['width' => '80', 'text-align' => 'center'],
                            ],
        ],
    ]); ?>

</div>
