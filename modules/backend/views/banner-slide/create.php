<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BannerSlide */

$this->title = 'Thêm mới Banner Slide';
$this->params['breadcrumbs'][] = ['label' => 'Banner Slides', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div> 
    <div class="panel-body">
        <div class="banner-slide-create">


            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>

    </div>
</div>
