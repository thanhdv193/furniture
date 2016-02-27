<?php

use yii\helpers;
use yii\helpers\Url;
?>

<div class="em-wrapper-area03">
    <div class="em-slideshow">
        <div class="em-owlcarousel-slideshow">
            <div id="em_owlcarousel_2_2484_sync1" class="owl-carousel">
                <?php foreach($data as $value){ ?>
                <div class="item">
                    <a href="#"> <img alt="1435569308_0_1.jpg" class="lazyOwl img-responsive" src="<?php Url::base('') ?>/upload/images/loading.gif" data-src="<?php Url::base('') ?>/<?php echo $value['image'] ?>" /> </a>
                    <div class="em-owlcarousel-description">
                        <div class="fadeInLeft em-owlcarousel-des em-owlcarousel-des-0">
                            <?php echo $value['description'] ?>
                        </div>
                    </div>
                </div><!-- /.item -->
                <?php } ?>
            </div><!-- /# em_owlcarousel_2_2484_sync1 -->
        </div><!-- /.em-owlcarousel-slideshow -->
    </div><!-- /.em-slideshow -->
</div>