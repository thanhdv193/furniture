<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AuthGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nhóm quyền';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <p>
            <?= Html::a('Thêm nhóm quyền', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <div class="panel-body">   
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'group_name',
                'created_at',
                'updated_at',
                'status',
                // 'description',
                // 'alias',
                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]);
        ?>

    </div>
</div>

