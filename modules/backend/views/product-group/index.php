<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-group-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'product_group_id',
                'contentOptions' => ['style' => 'width:15px;'],
                'label' => 'Mã'
            ],
            [
                'attribute' => 'name',
                'label' => 'Tên'
            ],
            //'title',
            //'h1',
            //'meta_description',
            // 'sort_order',
            // 'active',
            // 'create_date',
            [
                'attribute' => 'create_date',
                'format' => ['date', 'php:d/m/Y'],
                'label' => 'Ngày tạo'
            ],
            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Thao tác',
                'headerOptions' => ['width' => '80', 'text-align' => 'center'],
            ],
        ],
    ]);
    ?>

</div>
