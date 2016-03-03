<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách quản trị';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>           
        </p>
    </div>
    
    <div class="panel-body">
        <?php foreach($listData as $value){ ?>
            <div><?php echo $value['username'] ?></div>
            <div><a href="<?php echo Url::base('http') ?>/backend/default/permission-user?id=<?php echo $value['id'] ?>">Cấp quyền</a></div>
        <?php }?>
    </div>
    

</div>
