<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = "Chi tiết đơn hàng của khách hàng :" . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Xóa', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Bạn có chắc muốn xóa đơn hàng của : ' . $model->name,
                    'method' => 'post',
                ],
            ])
            ?>
        </p>
    </div>
    <div class="panel-body">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',                
                [
                'attribute' => 'user_id',
                'format'=>'raw',
                'value' => $model->user_id == 0 ? "Khách vãng lai" : "Khách có tài khoản"
               ],
                'name',
                'address',
                'email:email',
                'phone',                
                 [
             'attribute' => 'create_date',
             'format'=>'raw',
             'value' =>Yii::$app->formatter->asDatetime($model->create_date, 'php:h:i:s d/m/Y'),
            ],
                //'cust_note',
                'is_process',
                
            ],
        ])
        ?>
    </div>
</div>
