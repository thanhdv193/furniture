<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Banner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [

                'attribute' => 'banner_id',
                'contentOptions' => ['style' => 'width:15px;'],
                'label' => 'Mã'
            ],                                    
            [
                'attribute' => 'image_type_id',
                'label' => 'Loại ảnh',
                'value' =>'image_type.object_name'
            ],
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d/m/Y'],
                'label' => 'Ngày tạo'
            ],
            [
                'attribute' => 'sort_order',
                'label' => 'Thứ tự'
            ],
            [
                'attribute' => 'image_id',
                'format' => 'html',
                'label' => 'Ảnh đại diện',
                'value' => function ($model)
                {
                    $array = app\models\Image::find()->where(['object_id'=>$model['banner_id'],'object_type'=>'banner'])->one();
                    
                    return Html::img('@web/'.$array['image_path'].'' . $array['filename'], ['width' => '100px','height'=>'70px']);
                },
            ],
            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Thao tác',
                'headerOptions' => ['width' => '80', 'text-align' => 'center'],
            ],
        ],
    ]);
    ?>

</div>
