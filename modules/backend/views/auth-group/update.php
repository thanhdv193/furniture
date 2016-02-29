<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuthGroup */

$this->title = 'Sửa : ' . ' ' . $model->group_name;
$this->params['breadcrumbs'][] = ['label' => 'Nhóm quyền', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="panel-body">
        <div class="auth-group-update">    
            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>

</div>

