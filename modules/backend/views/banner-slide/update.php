<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BannerSlide */

$this->title = 'Update Banner Slide: ' . ' ' . $model->banner_id;
$this->params['breadcrumbs'][] = ['label' => 'Banner Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->banner_id, 'url' => ['view', 'id' => $model->banner_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="banner-slide-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
