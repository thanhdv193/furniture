<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nhóm sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <input type="hidden" value="product_group_index" name="index-nav-menu-left" />  
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('Thêm nhóm sản phẩm', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>    
    <div class="panel-body">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',            
            [
                    'attribute' => 'title',         
                    'format' => 'raw',                    
                    'value' => function ($model)
                    {        
                       $url = Yii::$app->request->baseUrl; 
                       return  Html::a($model['title'], [$url.'/backend/product-group/view?id='.$model['id']], ['class'=>'']);
                    },
            ],   
            //'z_index',            
            [
                    'attribute' => 'create_date',                                        
                    'value' => function ($model)
                    {              
                        return Yii::$app->formatter->asDatetime($model['create_date'], 'php:h:i:s d/m/Y');                                             
                    },
                        ],
            [
                    'attribute' => 'active',                                        
                    'value' => function ($model)
                    {         
                        if($model['active']== 1)
                        {
                            return "hoạt động";
                        }else{
                            return "ẩn";
                        }
                        
                    },
            ],                            

            ['class' => 'yii\grid\ActionColumn',
                        'header' => 'Thao tác',
                        'template' => '{update} {delete}',
                        'headerOptions' => ['width' => '150', 'text-align' => 'center'],
                        'buttons' => [

                            //view button
                            'update' => function ($url, $model)
                            {
                                return Html::a('<span class="fa fa-pencil-square-o"></span> Sửa', $url, [
                                            'title' => Yii::t('app', 'Sửa'),
                                            'class' => 'btn-grid btn btn-primary btn-xs',
                                ]);
                            },
                                    'delete' => function ($url, $model)
                            {
                                return Html::a('<span class="fa fa-trash-o"></span> Xóa', $url, [
                                            'title' => Yii::t('app', 'Xóa'),
                                            'class' => 'btn-grid btn btn-danger btn-xs',
                                ]);
                            },
                                ],
            ],
        ],
    ]); ?>
    </div>
    

</div>
