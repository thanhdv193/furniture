<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Types';
$this->params['breadcrumbs'][] = "Danh mục sản phẩm";

$this->registerJsFile(Url::base('').'/js/backend/tree-menu/MultiNestedList.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile(Yii::$app->request->baseUrl . '/js/backend/tree-menu/style.css');
?>   
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('Thêm loại sản phẩm', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <div class="panel-body">
        <div class="menu_tree">
            <ul>
                <li><a href="#">(10) Manchester</a>
                    <ul>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>                       
                    </ul>
                </li>
                <li><a href="#">Manchester</a>
                    <ul>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>                       
                    </ul>
                </li>
                <li><a href="#">Manchester</a>
                    <ul>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>                       
                    </ul>
                </li>
                <li><a href="#">Manchester</a>
                    <ul>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>                       
                    </ul>
                </li>
                <li><a href="#">Manchester</a>
                    <ul>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>
                        <li><a href="#">Spiral Scratch</a></li>                       
                    </ul>
                </li>                  
            </ul>
        </div>
        
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                //'id',                                         
                [
                    'attribute' => 'parent_id',                                        
                    'value' => function ($model)
                    {
                        $array = app\models\ProductType::find()->where(['id' => $model['parent_id'], 'active' => '1'])->one();
                        if($array['title'] == null)
                        {
                            return "";
                        }else{
                            return $array['title'];
                        }                                              
                    },
                        ],
                'title',
                //'description:ntext',
                //'link',
                // 'z_index',
                // 'is_menu',
                // 'olink',
                // 'create_date',
                // 'active',
                ['class' => 'yii\grid\ActionColumn',
                    'header' => 'Thao tác',
                    'headerOptions' => ['width' => '100', 'text-align' => 'center'],
                ],
            ],
        ]);
        ?>
    </div>

</div>

