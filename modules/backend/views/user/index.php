<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách người dùng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <input type="hidden" value="user_index" name="index-nav-menu-left" />
    <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a('Thêm người dùng', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    
    <div class="panel-body">
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],                       
            [
                    'attribute' => 'username',         
                    'format' => 'raw',                    
                    'value' => function ($model)
                    {        
                       $url = Yii::$app->request->baseUrl; 
                       return  Html::a($model['username'], [$url.'/backend/user/view?id='.$model['id']], ['class'=>'']);
                    },
            ],
            'last_name',
            'name',                                
            [
                'attribute' => 'avatar',
                 'headerOptions' => ['width' => '100', 'text-align' => 'center'],
                    'format' => 'html',                    
                    'value' => function ($model)
                    {                        
                        if($model['avatar'] == null)
                        {
                            return Html::img('@web/' . 'upload/avatar/no-avatar.png', ['width' => '50px', 'height' => '50px']);
                        }else{
                            return Html::img('@web/' . $model['avatar'], ['width' => '50px', 'height' => '50px']);
                        }
                        
                    },
            ],                
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            // 'status',            
            [
                    'attribute' => 'created_at',                                        
                    'value' => function ($model)
                    {              
                        return Yii::$app->formatter->asDatetime($model['created_at'], 'php:h:i:s d/m/Y');                                             
                    },
            ],
            // 'updated_at',
            // 'role',

            ['class' => 'yii\grid\ActionColumn',
                        'header' => 'Thao tác',
                        'template' => '{update} {delete}',
                        'headerOptions' => ['width' => '130', 'text-align' => 'center'],
                        'buttons' => [

                            //view button
                            'update' => function ($url, $model)
                            {
                                return Html::a('<span class="fa fa-pencil-square-o"></span> Sửa', $url, [
                                            'title' => Yii::t('app', 'Sửa'),
                                            'class' => 'btn-grid btn btn-primary btn-xs',
                                ]);
                            },
                                    'delete' => function ($url, $model)
                            {
                                return Html::a('<span class="fa fa-trash-o"></span> Xóa', $url, [
                                            'title' => Yii::t('app', 'Xóa'),
                                            'class' => 'btn-grid btn btn-danger btn-xs',
                                ]);
                            },
                                ],
            ],
        ],
    ]); ?>
    </div>
    

</div>
