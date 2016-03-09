<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = 'Thêm sản phẩm';
$this->params['breadcrumbs'][] = ['label' => 'Danh sách sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <input type="hidden" value="product_create" name="index-nav-menu-left" />    
    <div class="panel">
        <div class="panel-body">
            <h1><?= Html::encode($this->title) ?></h1>
        </div> 
    </div>    
    <div class="panel-body">
        <div class="product-create">    
            <?=
            $this->render('_form', [
                'model' => $model,
                'temp_hash' => $temp_hash
            ])
            ?>

        </div>
    </div>

</div>

