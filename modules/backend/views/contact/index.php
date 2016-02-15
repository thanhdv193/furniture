<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'contact_id',            
            [
                'attribute' => 'user_id',
                'label' => 'Mã user'
            ],
            [
                'attribute' => 'name',
                'label' => 'Họ tên'
            ],
            [
                'attribute' => 'phone',
                'label' => 'Số điện thoại'
            ],
            'email:email',
            // 'description',            
            [
                'attribute' => 'create_date',
                'format' => ['date', 'php:H:i:s d/m/Y'],
                'label' => 'Ngày gửi'
            ],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model)
                    {
                        return Html::a('<span class="glyphicon glyphicon-user"></span>', $url);
                    },
                    'link' => function ($url, $model, $key)
                    {
                        return Html::a('Action', $url);
                    },
                ],
            ],
        ],
    ]);
    ?>

</div>
