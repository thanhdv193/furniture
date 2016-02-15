<?php

use yii\helpers;
use app\widgets\TrendWidget;
use yii\helpers\Url;
$this->registerJsFile(Url::base('').'/js/slider/modernizr.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile(Url::base('').'/js/slider/index.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="header-top-right-wapper">
                    <div class="homeslider">
                        <div class="content-slide">
                            <ul id="slide-background">                                
                                <div class="slider js_slider" data-autorotate="5">
                                    <ul>
                                        <?php foreach ($data as $value) : ?>
                                            <li>
                                                <img src="/<?php echo $value['image']['image_path'] ?><?php echo $value['image']['filename'] ?>">
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="header-banner">
                        <!-- Tremd -->
                        <?= TrendWidget::widget() ?>
                        <!-- End Trend -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>