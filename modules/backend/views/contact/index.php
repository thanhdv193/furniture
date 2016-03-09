<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <input type="hidden" value="contact_index" name="index-nav-menu-left" />  
    <div class="contact-index">
        <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>            
            <p>
                <?= Html::a('Create Contact', ['create'], ['class' => 'btn btn-success']) ?>
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
                    'title',
                    'info:ntext',
                    'map:ntext',
                    'support:ntext',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div>
</div>
