<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AuthGroup */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Auth Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </p>
    </div>
    <div class="panel-body">
        <div class="auth-group-view">      
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'group_name',
                    'created_at',
                    'updated_at',
                    'status',
                    'description',
                    'alias',
                ],
            ])
            ?>
        </div>
    </div>   


</div>
