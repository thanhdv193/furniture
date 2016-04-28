<?php

use app\models\ProductSearch;
use app\models\ProductType;
use app\models\ProductGroup;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this View */
/* @var $model ProductSearch */
/* @var $form ActiveForm */
?>
<?php
 
$this->registerJs(
   '$("document").ready(function(){ 
        $("#product-search").on("pjax:end", function() {
            $.pjax.reload({container:"#product-index"});  //Reload GridView
        });       
    });'
);
?>
<div class="product-search">
<?php Pjax::begin(['id' => 'product-search']); ?>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['data-pjax' => true ]
    ]); ?>
    <div class="form-group">
        <div class="col-lg-12">
            <div class="col-md-3">
                <?= $form->field($model, 'title') ?>            
            </div>
            <div class="col-md-2">
                <?php
            $productGroup = ProductGroup::find()->where(['active' => 1])->all();
            $listData = ArrayHelper::map($productGroup, 'title', 'title');
            echo $form->field($model, 'productGroup')->dropDownList(
                    $listData, ['prompt' => 'Chọn nhóm sản phẩm',])->label('Nhóm sản phẩm');
            ?>                 
            </div>
            <div class="col-md-2">
                <?php
            $productType = ProductType::find()->where(['active' => 1])->all();
            $listData = ArrayHelper::map($productType, 'title', 'title');
            echo $form->field($model, 'productType')->dropDownList(
                    $listData, ['prompt' => 'Chọn chuyên mục',])->label('Chuyên mục');
            ?>  
             
            </div>   
            <div class="col-md-3" style="padding: 20px 10px;">
                <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
            </div>        
        </div>    
    </div>
    
    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>
</div>
