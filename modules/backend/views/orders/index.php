<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Orders;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách đơn hàng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">

    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('Thêm đơn hàng', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <div class="panel-body">
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],                
                [
                    'attribute' => 'id',
                    'headerOptions' => ['width' => '100', 'text-align' => 'center'],                
                ],
                [
                    'attribute' => 'user_id',
                    'headerOptions' => ['width' => '150', 'text-align' => 'center'],
                    'value' => function ($model)
                        {
                            if ($model['user_id'] == 0)
                            {
                                return "Khách vãng lai";
                            }else{
                                return "Khách có tài khoản";
                            }                            
                        },
                ],
                'name',
                //'address',
                //'email:email',
                'phone',
                [
                    'attribute' => 'create_date',
                    'value' => function ($model)
                    {
                        return Yii::$app->formatter->asDatetime($model['create_date'], 'php:h:i:s d/m/Y');
                    },
                ],
                // 'cust_note',                
                [
                    'attribute' => 'is_process',
                    'headerOptions' => ['width' => '100', 'text-align' => 'center'],
                    'value' => function ($model)
                        { 
                            if ($model['is_process'] == Orders::order_process)
                            {
                                return "Chưa xử lý";
                            }
                            if ($model['is_process'] == Orders::order_process_done)
                            {
                                return "Đã xử lý";
                            }
                            if ($model['is_process'] == Orders::order_process_watting)
                            {
                                return "Đang chờ";
                            }
                        },
                ],
                ['class' => 'yii\grid\ActionColumn',
                    'header' => 'Thao tác',
                    'template' => '{view} {delete}',
                    'headerOptions' => ['width' => '160', 'text-align' => 'center'],
                    'buttons' => [

                        //view button
                        'view' => function ($url, $model)
                        {
                            return Html::a('<span class="fa fa-eye"></span> Xem chi tiết', $url, [
                                        'title' => Yii::t('app', 'Xem chi tiết'),
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



</div>
