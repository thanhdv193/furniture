<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Danh sách sản phẩm';
$this->params['breadcrumbs'][] = $this->title;

function displayCheckbox($data)
{
    return '<label class="ckbox ckbox-primary">'
            .'<input type="checkbox" name="customer_id[]" value="'.$data->id.'"><span></span>'
            .'</label>';
}
?>
<div class="panel">
    <input type="hidden" value="product_index" name="index-nav-menu-left" />    
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <div class="col-md-12">
                <p class="pull-right">
                    <?= Html::a('Thêm sản phẩm', ['create'], ['class' => 'btn btn-primary']) ?>
                </p>
            </div>        
    </div>    
    <div class="panel-body">
        <?= $this->render('_search', ['model' => $searchModel]); ?>
        <?php Pjax::begin(['id' => 'product-index']) ?>
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'tableOptions' =>['class' => 'table table-hover nomargin'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'], 
            [
                    'class' => 'yii\grid\DataColumn',
                    'attribute' => 'id',
                    'headerOptions' => ['class' => 'text-center'],
                    'format' => 'html',
                    'content' => 'displayCheckbox',
                    'contentOptions' => ['class' => 'vertical-middle','width' => '20', 'style' => 'text-align: center'],
                    'header' => '<label class="ckbox ckbox-primary">
                                <input type="checkbox" name="check_all" class="check_all" ><span></span>
                                </label>',
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
            [
                    'attribute' => 'title',         
                    'format' => 'raw',          
                    'headerOptions' => ['class' => 'text-left'],  
                    'contentOptions' => ['class' => 'vertical-middle','style' => 'text-align: left'],
                    'value' => function ($model)
                    {        
                       $url = Yii::$app->request->baseUrl; 
                       return  Html::a($model['title'], [$url.'/backend/product/view?id='.$model['id']], ['class'=>'']);
                    },
            ],
            [
                    'attribute' => 'productGroup',     
                    'headerOptions' => ['class' => 'text-center'],            
                    'contentOptions' => ['class' => 'vertical-middle','style' => 'text-align: center'],
                    'value' => function ($model)
                    {              
                        return $model->productGroup;                                         
                    },
            ],  
             [
                    'attribute' => 'productType',     
                    'headerOptions' => ['class' => 'text-center'],            
                    'contentOptions' => ['class' => 'vertical-middle','style' => 'text-align: center'],
                    'value' => function ($model)
                    {              
                        return $model->productType;                                         
                    },
            ],                              
            [
                    'attribute' => 'create_date',     
                    'headerOptions' => ['class' => 'text-center'],            
                    'contentOptions' => ['class' => 'vertical-middle','style' => 'text-align: center'],
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
        <?php Pjax::end() ?>
    </div>
    

</div>
