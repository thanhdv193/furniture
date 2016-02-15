<?php

use yii\helpers;
use app\widgets\HotDealWidget;
use app\widgets\ProductBoxOneWidget;
use app\widgets\ProductBoxTwoWidget;
use app\widgets\ProductBoxThreeWidget;
use app\widgets\ProductBoxForWidget;

$this->title = 'Trang mua bán online';
?>
<!-- Hot deals -->
<?= HotDealWidget::widget() ?>

<!-- ./Hot deals -->
<!-- box product new arrivals -->
<div class="box-products new-arrivals">
    <?= ProductBoxOneWidget::widget() ?>
</div>
<!-- ./box product new arrivals -->
<!-- box product TOP SELLERS IN -->
<div class="box-products top-sellers">
    <?= ProductBoxTwoWidget::widget() ?>
</div>
<!-- ./box product TOP SELLERS IN -->

<!-- Banner -->
<div class="block-banner">
    <div class="container">
        <div class="block-banner-left">
            <div class="banner-opacity">
                <a href="#"><img src="" alt="Banner"></a>
            </div>
        </div>
        <div class="block-banner-right">
            <div class="banner-opacity">
                <a href="#"><img src="" alt="Banner"></a>
            </div>
        </div>
    </div>
</div>
<!-- ./Banner -->
<!-- box product special-products -->
<div class="box-products special-products">
    <?= ProductBoxThreeWidget::widget() ?>
</div>
<!-- ./box product SPECIAL PRODUCTS -->
<!-- box product RECOMMENDATION FOR YOU -->
<div class="box-products recommendation">
    <?= ProductBoxForWidget::widget() ?>
</div>
<!-- ./box product RECOMMENDATION FOR YOU -->
<div class="container">
    <!-- blog list -->
    <div class="blog-list">
        <h2 class="page-heading">
            <span class="page-heading-title">From the blog</span>
        </h2>
        <div class="blog-list-wapper">
            <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                <li>
                    <div class="post-thumb image-hover2">
                        <a href="#"><img src="" alt="Blog"></a>
                    </div>
                    <div class="post-desc">
                        <h5 class="post-title">
                            <a href="#">Share the love with KuteShop</a>
                        </h5>
                        <div class="post-meta">
                            <span class="date">February 27, 2015</span>
                            <span class="comment">27 comment</span>
                        </div>
                        <div class="readmore">
                            <a href="#">Readmore</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post-thumb image-hover2">
                        <a href="#"><img src="" alt="Blog"></a>
                    </div>
                    <div class="post-desc">
                        <h5 class="post-title">
                            <a href="#">Share the love with KuteShop</a>
                        </h5>
                        <div class="post-meta">
                            <span class="date">February 27, 2015</span>
                            <span class="comment">27 comment</span>
                        </div>
                        <div class="readmore">
                            <a href="#">Readmore</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post-thumb image-hover2">
                        <a href="#"><img src="" alt="Blog"></a>
                    </div>
                    <div class="post-desc">
                        <h5 class="post-title">
                            <a href="#">Big sales this summer</a>
                        </h5>
                        <div class="post-meta">
                            <span class="date">February 27, 2015</span>
                            <span class="comment">27 comment</span>
                        </div>
                        <div class="readmore">
                            <a href="#">Readmore</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="post-thumb image-hover2">
                        <a href="#"><img src="ss" alt="Blog"></a>
                    </div>
                    <div class="post-desc">
                        <h5 class="post-title">
                            <a href="#">How to shop with us</a>
                        </h5>
                        <div class="post-meta">
                            <span class="date">February 27, 2015</span>
                            <span class="comment">27 comment</span>
                        </div>
                        <div class="readmore">
                            <a href="#">Readmore</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./blog list -->
</div>