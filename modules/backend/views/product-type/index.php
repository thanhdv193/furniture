<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\components\helpers\Menu;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh mục sản phẩm';
$this->params['breadcrumbs'][] = "Danh mục sản phẩm";

$this->registerJsFile(Url::base('').'/js/backend/tree-menu/MultiNestedList_1.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile(Yii::$app->request->baseUrl . '/js/backend/tree-menu/style_1.css');
?>   
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('Thêm loại sản phẩm', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <div class="panel-body">
        <div class="tree well">
            <?php echo Menu::menu($menu) ?>  
            <div class="tree well">
    <ul>
        <li>
            <span><i class="icon-folder-open"></i> Parent</span> <a href="">Goes somewhere</a>
            <ul>
                <li>
                	<span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
                    <ul>
                        <li>
	                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                        </li>
                    </ul>
                </li>
                <li>
                	<span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
                    <ul>
                        <li>
	                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                        </li>
                        <li>
                        	<span><i class="icon-minus-sign"></i> Grand Child</span> <a href="">Goes somewhere</a>
                            <ul>
                                <li>
	                                <span><i class="icon-minus-sign"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
		                            <ul>
		                                <li>
			                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
		                                </li>
		                                <li>
			                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
		                                </li>
		                             </ul>
                                </li>
                                <li>
	                                <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
                                </li>
                                <li>
	                                <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
                                </li>
                            </ul>
                        </li>
                        <li>
	                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <span><i class="icon-folder-open"></i> Parent2</span> <a href="">Goes somewhere</a>
            <ul>
                <li>
                	<span><i class="icon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
		        </li>
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
</div>
