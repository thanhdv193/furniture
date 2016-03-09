<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abouts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <input type="hidden" value="about_index" name="index-nav-menu-left" />  
    <div class="about-index">
        <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>
                <?= Html::a('Create About', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
        </div>
        <div class="panel-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'title',
                    'content:ntext',
                    'img',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>


    </div>
</div>  

