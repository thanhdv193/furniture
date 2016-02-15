<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách email';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Thêm email', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'email_id:email',
//            'id_user',
            [

                'attribute' => 'account_email',
                'label' => 'Tên email',
            ],
            [

                'attribute' => 'email_status',
                'label' => 'Trạng thái',
            ],
//            'account_email:email',
//            'password_email:email',
//            'email_status:email',
//             'created_at',
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

</div>
