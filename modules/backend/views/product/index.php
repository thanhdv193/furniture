<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <input type="hidden" value="product_index" name="index-nav-menu-left" />    
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('Thêm sản phẩm', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>    
    <div class="panel-body">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],                       
            [
                    'attribute' => 'title',         
                    'format' => 'raw',                    
                    'value' => function ($model)
                    {        
                       $url = Yii::$app->request->baseUrl; 
                       return  Html::a($model['title'], [$url.'/backend/product/view?id='.$model['id']], ['class'=>'']);
                    },
            ],
            [
                'attribute' => 'photo',
                 'headerOptions' => ['width' => '100', 'text-align' => 'center'],
                    'format' => 'html',                    
                    'value' => function ($model)
                    {
                        $array = app\models\ProductPhoto::find()->where(['product_id' => $model['id'], 'is_avatar' => 0])->one();
                        if($array == null)
                        {
                            return "Không có ảnh";
                        }else{
                            return Html::img('@web/' . $array['image_path'] . '' . $array['filename'], ['width' => '60px', 'height' => '60px']);
                        }
                        
                    },
            ],                            
            'productGroup',            
            'productType',                                                                
                                 
            [
                    'attribute' => 'create_date',                                        
                    'value' => function ($model)
                    {              
                        return Yii::$app->formatter->asDatetime($model['create_date'], 'php:h:i:s d/m/Y');                                             
                    },
            ],
            [
                    'attribute' => 'is_active',      
                    'headerOptions' => ['width' => '100', 'text-align' => 'center'],
                    'format' => 'raw', 
                    'value' => function ($model)
                    {         
                        if($model['is_active']== 1)
                        {
                            return Html::label('hoạt động', 'use',['class'=>'fa fa-check label label-success']);
                        }else{
                            return Html::label('Khóa', 'use',['class'=>'fa fa-lock label label-warning']);
                        }
                        
                    },
            ], 
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

            ['class' => 'yii\grid\ActionColumn',
                        'header' => 'Thao tác',
                        'template' => '{update} {delete}',
                        'headerOptions' => ['width' => '130', 'text-align' => 'center'],
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
