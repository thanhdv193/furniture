<?php

use yii\helpers;
use app\components\helpers\SystemHelper;
use app\components\helpers\HelperLink;
?>
<div class="hot-deals-row">
    <div class="container">
        <div class="hot-deals-box">
            <div class="row">
                <div class="" style="width:10%; float: left;">
                    <div class="hot-deals-tab">
                        <div class="hot-deals-title vertical-text">
                            <span>h</span>
                            <span>o</span>
                            <span>t</span>
                            <span class="yellow">d</span>
                            <span class="yellow">e</span>
                            <span class="yellow">a</span>
                            <span class="yellow">l</span>
                            <span class="yellow">s</span>
                        </div>
                        <div class="hot-deals-tab-box">
                            <ul class="nav-tab">
                                <!--                                <li class="active"><a data-toggle="tab" href="#hot-deal-1">UP TO 40% OFF</a></li>
                                                                <li><a data-toggle="tab" href="#hot-deal-2">UP TO 50% OFF</a></li>
                                                                <li><a data-toggle="tab" href="#hot-deal-1">UP TO 60% OFF</a></li>
                                                                <li><a data-toggle="tab" href="#hot-deal-2">UP TO 70% OFF</a></li>
                                                                <li><a data-toggle="tab" href="#hot-deal-1">UP TO 80% OFF</a></li>-->
                            </ul>
                            <!--                            <di class="box-count-down">
                                                            <span class="countdown-lastest" data-y="2015" data-m="9" data-d="1" data-h="11" data-i="14" data-s="50"></span>
                                                        </di>-->
                            <di class="box-count-down">
                                <span class="countdown-lastest is-countdown" data-y="2015" data-m="9" data-d="1" data-h="00" data-i="00" data-s="00">
<!--                                    <span class="box-count">
                                        <span id="days" class="number">00</span> 
                                        <span class="text">Ngày</span>
                                    </span>
                                    <span class="dot">:</span>
                                    <span class="box-count">
                                        <span id="hours" class="number">00</span> 
                                        <span class="text">Giờ</span>
                                    </span>
                                    <span class="dot">:</span>
                                    <span class="box-count">
                                        <span id="minutes" class="number">00</span>
                                        <span class="text">Phút</span>
                                    </span>
                                    <span class="dot">:</span>
                                    <span class="box-count">
                                        <span id="seconds" class="number">00</span> 
                                        <span class="text">Giây</span>

                                    </span>-->
                                </span>
                            </di>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 hot-deals-tab-content-col" style="width: 90%">
                    <div class="hot-deals-tab-content tab-container">
                        <div id="hot-deal-1" class="tab-panel active">
                            <ul class="product-list owl-carousel nav-center" data-dots="false" data-loop="true" data-nav = "true" data-margin = "29" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                <?php foreach ($listproduct as $value)
                                {
                                    ?>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="/<?php echo $value['image_list']['image_path'] ?>/<?php echo $value['image_list']['filename'] ?>" /></a>

                                        </div>
                                        <div class="price-percent-reduction2">
                                            -33% OFF
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="<?php echo HelperLink::rewriteUrllink(1, $value['name'], 'san-pham') ?>"><?php echo $value['name'] ?></a></h5>
                                            <div class="content_price">
                                                <span class="price product-price"><?php echo SystemHelper::product_price($value['price']) ?></span>
                                                <span class="price old-price"><?php echo SystemHelper::product_price($value['old_price']) ?></span>
                                            </div>
                                        </div>
                                    </li>
<?php } ?>


                                <!--                                <li>
                                                                    <div class="left-block">
                                                                        <a href="#"><img class="img-responsive" alt="product" src="/images/p7.jpg" /></a>
                                                                    </div>
                                                                    <div class="right-block">
                                                                        <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                                                        <div class="content_price">
                                                                            <span class="price product-price">$38,95</span>
                                                                            <span class="price old-price">$52,00</span>
                                                                        </div>
                                                                    </div>
                                                                </li>-->
                            </ul>
                        </div> 
                        <!--                        <div id="hot-deal-2" class="tab-panel">
                                                    <ul class="product-list owl-carousel nav-center" data-dots="false" data-loop="true" data-nav = "true" data-margin = "29" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                                        <li>
                                                            <div class="left-block">
                                                                <a href="#"><img class="img-responsive" alt="product" src="/images/p8.jpg" /></a>
                                                                
                                                            </div>
                                                            <div class="price-percent-reduction2">
                                                                -30% OFF
                                                            </div>
                                                            <div class="right-block">
                                                                <h5 class="product-name"><a href="#">Luxury Perfume</a></h5>
                                                                <div class="content_price">
                                                                    <span class="price product-price">$38,95</span>
                                                                    <span class="price old-price">$52,00</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="left-block">
                                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/option3/p9.jpg" /></a>
                                                            </div>
                                                            <div class="right-block">
                                                                <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                                                <div class="content_price">
                                                                    <span class="price product-price">$38,95</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="left-block">
                                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/option3/p10.jpg" /></a>
                                                            </div>
                                                            <div class="right-block">
                                                                <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                                                <div class="content_price">
                                                                    <span class="price product-price">$38,95</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="left-block">
                                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/option3/p11.jpg" /></a>
                                                            </div>
                                                            <div class="right-block">
                                                                <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                                                <div class="content_price">
                                                                    <span class="price product-price">$38,95</span>
                                                                    <span class="price old-price">$52,00</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="left-block">
                                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/option3/p12.jpg" /></a>
                                                            </div>
                                                            <div class="right-block">
                                                                <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                                                <div class="content_price">
                                                                    <span class="price product-price">$38,95</span>
                                                                    <span class="price old-price">$52,00</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>