<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BannerSlide */

$this->title = $model->banner_id;
$this->params['breadcrumbs'][] = ['label' => 'Banner Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">        
        <p>
            <?= Html::a('Sửa', ['update', 'id' => $model->banner_id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Xóa', ['delete', 'id' => $model->banner_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Bạn có chắc muốn xóa không?',
                    'method' => 'post',
                ],
            ])
            ?>
        </p>
    </div>
    <div class="panel-body">
        <div class="banner-slide-view">
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'banner_id',
                    [
                        'attribute' => 'image',
                        'value' => $model->image == null ? '@web/upload/avatar/no-avatar.png' : '@web/' . $model->image,
                        'format' => ['image', ['width' => '300', 'height' => '200']],
                    ],
                    [
                        'attribute' => 'create_date',
                        'format' => 'raw',
                        'value' => Yii::$app->formatter->asDatetime($model->create_date, 'php:h:i:s d/m/Y'),
                    ],
                    'sort_order',
                    //'user_id',
                    [
                        'attribute' => 'active',
                        'format' => 'raw',
                        'value' => $model->active == 1 ? 'Hoạt động' : 'Ẩn'
                    ],
                ],
            ])
            ?>

        </div>

    </div>
</div>
