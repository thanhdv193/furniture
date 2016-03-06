<?php

use yii\helpers;
use yii\helpers\Url;
use app\widgets\WrapperBannersWidget;

$this->title = 'Thông tin giới thiệu';
?>
<div class="wrapper-breadcrums">
    <div class="col-sm-24">
        <div class="row">
            <div class="col-sm-24">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="<?php echo Url::base('http') ?>" title="Trang chủ"><span>Trang chủ</span></a> <span class="separator">/ </span>
                        </li>
                        <li class="contact"> <strong>Giới thiệu</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= WrapperBannersWidget::widget() ?>
<div class="em-wrapper-main">
    <div class="container-fluid container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>
            <div class="em-wrapper-area03"></div>
            <div class="em-wrapper-area04"></div>
            <div class="em-main-container em-col1-layout">
                <div class="row">
                    <div class="em-col-main col-sm-24 col-sm-offset-1">
                        <div id="messages_product_view"></div>
                        <div class="page-title">
                            <h1>Thông tin giới thiệu</h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-24">    
                                <img src="<?php echo Url::base('http') ?>/<?php echo $data['img'] ?>">
                            </div>     
                            <div class="col-sm-24">    
                                <p>
                                    <?php echo $data['content'] ?>
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
