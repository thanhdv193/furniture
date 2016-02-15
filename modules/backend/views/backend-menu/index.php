<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BackendMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="backend-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm mới menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],          
            [
                'attribute' => 'id',
                'label' => 'Mã',
                'contentOptions' => ['style' => 'width:15px;'],
            ],
             [
                'attribute' => 'parent_id',
                'label' => 'Node Cha',
                
            ],   
            [
                'attribute' => 'name',
                'label' => 'Tên',
            ],  
            [
                'attribute' => 'route',
                'label' => 'Url',
            ],    
            [
                'attribute' => 'sort_order',
                'label' => 'Order',
            ], 
            'icon',            
            // 'added_by_ext',
            // 'rbac_check',
            // 'css_class',
            // 'translation_category',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
