<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc muốn xóa "'.$model->title.'" ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'productGroup',
            'productType',            
            'title',          
            [
             'attribute' => 'Mô tả',
             'format'=>'raw',
             'value' =>$model->description,
            ],     
             [
             'attribute' => 'Nội dung',
             'format'=>'raw',
             'value' =>$model->content,
            ],                
            'photo',            
            'is_hethang',                  
            [
             'attribute' => 'create_date',
             'format'=>'raw',
             'value' =>Yii::$app->formatter->asDatetime($model->create_date, 'php:h:i:s d/m/Y'),
            ],
            'is_active',
            //'discount',
            //'discount_bonus',
            'price',        
            //'size',            
            //'tags:ntext',
            'old_price',
            'quantity_current',            
            [
             'attribute' => 'view_count',
             'format'=>'raw',
             'value' => $model->view_count == 0 ? 0 : $model->view_count
            ],
            'seo_title',
            'seo_keyword',
            'seo_description',
            'seo_photo_alt',
        ],
    ]) ?>

</div>
<div class="panel panel-announcement">     
    <div class="panel-heading">
        <h4 class="panel-title">Ảnh sản phẩm</h4>
    </div>
    <div class="panel-body">
        <ul class="listimage" >   
            <?php
            if ($product_img != null)
            {
                ?>
                <?php
                foreach ($product_img as $value)
                {
                    ?>
                    <li class="uk-grid-margin image-item product-update">
                        <a class="itemview" href="#">
                            <div class="boximg" style="background-image: url(<?php echo Url::base('http') ?>/<?php echo $value['image_path'] . $value['filename'] ?>)"></div>
                        </a>                        
                    </li>                
                <?php } ?>   
            <?php } ?>    
        </ul> 
    </div>
</div><!-- panel --> 
