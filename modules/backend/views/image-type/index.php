<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImageTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Image Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Image Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id',
                'contentOptions' => ['style' => 'width:15px;'],
            ],
            [
                'attribute' => 'object_type',
                'label' => 'Loại ảnh',
            ],
            [
                'attribute' => 'object_name',
                'label' => 'Tên loại ảnh',
            ],
            [
                'attribute' => 'create_date',
                'label' => 'Ngày tạo',
                'format' => ['date', 'php:d/m/Y']
            ],
            

            ['class' => 'yii\grid\ActionColumn',
                        'header' => 'Thao tác',
                        'headerOptions' => ['width' => '80', 'text-align' => 'center'],
                        
                    ],
        ],
    ]); ?>

</div>
