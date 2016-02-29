<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuthGroup */

$this->title = 'Thêm nhóm quyền';
$this->params['breadcrumbs'][] = ['label' => 'Nhóm quyền', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="panel-body">
        <div class="auth-group-create">  
            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>


</div>
