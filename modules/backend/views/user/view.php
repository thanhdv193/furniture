<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách người dùng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
       <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc muốn xóa "'.$model->username.'" ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    </div>   
    <div class="panel-body">
        <div class="user-view">

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',                                    
            [
                'attribute' => 'avatar',
                'value' => '@web/'.$model->avatar,
                'format' => ['image', ['width' => '100', 'height' => '100']],
            ],
            'last_name',
            'name',
            
            [
             'attribute' => 'birthday',
             'format'=>'raw',
             'value' =>Yii::$app->formatter->asDatetime($model->birthday, 'php:d/m/Y'),
            ],
            'gender',
            'address',
            
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            //'status',
            [
             'attribute' => 'created_at',
             'format'=>'raw',
             'value' =>Yii::$app->formatter->asDatetime($model->created_at, 'php:h:i:s d/m/Y'),
            ],
            [
             'attribute' => 'updated_at',
             'format'=>'raw',
             'value' =>Yii::$app->formatter->asDatetime($model->updated_at, 'php:h:i:s d/m/Y'),
            ],          
            //'role',
            'group',
            'active',
            
        ],
    ]) ?>

</div>
    </div>
    

</div>
