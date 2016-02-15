<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách người dùng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index bread">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a('Thêm người dùng', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin() ?>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function($model)
        {
            if (isset($model->created_at))
            {
                
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [

                'attribute' => 'id',
                'contentOptions' => ['style' => 'width:15px;'],
            ],
            [
                'attribute' => 'Avatar',
                'format' => 'html',
                'label' => 'Ảnh đại diện',
                'value' => function ($data)
                {
                    return Html::img('@web/upload/User/Avatar/' . $data['Avatar'], ['width' => '70px']);
                },
                    ],
                    'username',
                    'email:email',
                    [
                        'attribute' => 'created_at',
                        'format' => ['date', 'php:d/m/Y']
                    ],
//                    [
//                        'attribute' => 'updated_at',
//                        'format' => ['date', 'php:d/m/Y']
//                    ],
                    ['class' => 'yii\grid\ActionColumn',
                        'header' => 'Thao tác',
                        'template' => '{update} {delete}',
                        'headerOptions' => ['width' => '150', 'text-align' => 'center'],
                        'buttons' => [

                            //view button
                            'update' => function ($url, $model)
                            {
                                return Html::a('<span class="fa fa-pencil-square-o"></span> Sửa', $url, [
                                            'title' => Yii::t('app', 'View'),
                                            'class' => 'btn-grid btn btn-primary btn-xs',
                                ]);
                            },
                                    'delete' => function ($url, $model)
                            {
                                return Html::a('<span class="fa fa-trash-o"></span> Xóa', $url, [
                                            'title' => Yii::t('app', 'delete'),
                                            'class' => 'btn-grid btn btn-primary btn-xs',
                                ]);
                            },
                                ],
                            ],
                        ],
                    ]);
                    ?>
                    <?php Pjax::end() ?>
</div>
