<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Thêm người dùng';
$this->params['breadcrumbs'][] = ['label' => 'Danh sách người dùng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>   
    <div class="panel-body">
        <div class="user-create">   
            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
    

</div>
