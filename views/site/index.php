<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;


/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<link href="<?= Url::base('http') ?>/css/popup.css" rel="stylesheet">
<div class="container">
    <?php foreach ($data as $value) { ?>
    <p><?php echo $value['name'] ?></p>
    <?php } ?>
    <?php
    echo LinkPager::widget([
        'pagination' => $pages,
        
//        'options' => [
//            'id' => 'pagination'
//        ],
//        'linkOptions' => [
//            'class' => 'page'
//        ],
    ]);
    ?>
</div>

