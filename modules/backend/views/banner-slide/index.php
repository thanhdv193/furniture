<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BannerSlideSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banner Slides';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <input type="hidden" value="banner_index" name="index-nav-menu-left" />    
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('Thêm banner', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>    
    <div class="panel-body">

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                //'banner_id',            
                [
                    'attribute' => 'image',
                    'headerOptions' => ['width' => '300', 'text-align' => 'center'],
                    'format' => 'html',
                    'value' => function ($model)
            {
                if ($model['image'] == null)
                {
                    return Html::img('@web/' . 'upload/avatar/no-avatar.png', ['width' => '50px', 'height' => '50px']);
                } else
                {
                    return Html::img('@web/' . $model['image'], ['width' => '200px', 'height' => '100px']);
                }
            },
                ],
                [
                    'attribute' => 'create_date',
                    'headerOptions' => ['width' => '200', 'text-align' => 'center'],
                    'value' => function ($model)
                    {
                        return Yii::$app->formatter->asDatetime($model['create_date'], 'php:h:i:s d/m/Y');
                    },
                ],
                [
                    'attribute' => 'sort_order',
                    'headerOptions' => ['width' => '100', 'text-align' => 'center'],
                ],
                // 'user_id',                
                [
                    'attribute' => 'active',
                    'headerOptions' => ['width' => '100', 'text-align' => 'center'],
                    'value' => function ($model)
            {
                if ($model['active'] == 1)
                {
                    return "hoạt động";
                } else
                {
                    return "ẩn";
                }
            },
                ],
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
                ]);
                ?>
    </div>
</div>
