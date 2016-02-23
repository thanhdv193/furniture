<?php

use yii\helpers\Url;
use yii\helpers;

$this->title = 'Chi tiết sản phẩm';

//$this->registerCssFile(Url::base('') . '/css/lib/em_cloudzoom.css');
//$this->registerJsFile(Url::base('') . '/js/lib/em_product_view.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::base('') . '/js/lib/lightbox.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile(Url::base('') . '/js/product-detail.js', ['depends' => [\yii\web\JqueryAsset::className()]]);

?>

<div class="wrapper-breadcrums">
    <div class="container">
        <div class="row">
            <div class="col-sm-24">
                <div class="breadcrumbs">
                    <ul>
                        <li class="Trang chủ"> <a href="<?php echo Url::base('http') ?>" title="Home"><span>Trang chủ</span></a> <span class="separator">/ </span>
                        </li>
                        <li class="category36"> <a href="category-one-column.html"><span><?php echo $data['category'] ?></span></a> <span class="separator">/ </span>
                        </li>
                        <li class="product"> <strong><?php echo $data['title'] ?></strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.wrapper-breadcrums -->
<div class="em-wrapper-main">
    <div class="container-fluid container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>
            <div class="em-wrapper-area03"></div>
            <div class="em-wrapper-area04"></div>
            <div class="em-main-container em-col1-layout">
                <div class="row">
                    <div class="em-col-main col-sm-24">
                        <div id="messages_product_view"></div>
                        <div class="product-view">
                            <div class="product-essential">
                                <form method="post" id="product_addtocart_form">
                                    <input name="form_key" type="hidden" value="N4DL2crX27DuHSDk" />
                                    <div class="product-view-detail">
                                        <div class="em-product-view row">
                                            <div class="em-product-view-primary em-product-img-box col-sm-16 first">
                                                <div id="em-product-shop-pos-top"></div>
                                                <div class="product-img-box">
                                                    <div class="media-left">
                                                        <p class="product-image">
                                                            <a class="cloud-zoom" id="image_zoom" rel="zoomWidth: 500,zoomHeight: 500,position: 'inside'" href="/upload/images/product/1000x1000/5_1.jpg">
                                                                <img class="em-product-main-img" src="/upload/images/product/800x800/5_1.jpg" alt='' title="<?php echo $data['title'] ?>" />
                                                            </a>
                                                            <a id="zoom-btn" rel="lightbox[em_lightbox]" href="/upload/images/product/1000x1000/5_1.jpg" title="<?php echo $data['title'] ?>">Zoom</a>
                                                        </p>
                                                    </div>
                                                    <div class="more-views">
                                                        <ul class="em-moreviews-slider ">
                                                            <li class="item">
                                                                <a class="cloud-zoom-gallery" rel="useZoom:'image_zoom', smallImage:'/upload/images/product/800x800/4_1.jpg', adjustX:5, adjustY:-5, position:'inside'" onclick="return false" href="<?php Url::base('') ?>/upload/images/product/1000x1000/4_1.jpg"> <img src="<?php Url::base('') ?>/upload/images/product/100x100/4_1.jpg" alt="" /> </a> <a class="no-display" href="<?php Url::base('') ?>/upload/images/product/1000x1000/4_1.jpg" rel="lightbox[em_lightbox]">lightbox moreview</a>
                                                            </li>
                                                            <li class="item">
                                                                <a class="cloud-zoom-gallery" rel="useZoom:'image_zoom', smallImage:'/upload/images/product/800x800/6_1.jpg', adjustX:5, adjustY:-5, position:'inside'" onclick="return false" href="<?php Url::base('') ?>/upload/images/product/1000x1000/6_1.jpg"> <img src="<?php Url::base('') ?>/upload/images/product/100x100/6_1.jpg" alt="" /> </a> <a class="no-display" href="<?php Url::base('') ?>/upload/images/product/1000x1000/6_1.jpg" rel="lightbox[em_lightbox]">lightbox moreview</a>
                                                            </li>
                                                            <li class="item">
                                                                <a class="cloud-zoom-gallery" rel="useZoom:'image_zoom', smallImage:'/upload/images/product/800x800/5_1.jpg', adjustX:5, adjustY:-5, position:'inside'" onclick="return false" href="<?php Url::base('') ?>/upload/images/product/1000x1000/5_1.jpg"> <img src="<?php Url::base('') ?>/upload/images/product/100x100/5_1.jpg" alt="" /> </a> <a class="no-display" href="<?php Url::base('') ?>/upload/images/product/1000x1000/5_1.jpg" rel="">lightbox moreview</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="em-product-view-secondary em-product-shop col-sm-8">
                                                <div class="product-shop  fix_menu">
                                                    <div id="em-product-info-basic">
                                                        <div class="product-name">
                                                            <h1><?php echo $data['title'] ?></h1>
                                                        </div>                                                        
                                                        <div class="em-sku-availability">
                                                            <p class="sku">SKU: Sho_1</p>
                                                            <p class="availability in-stock"> Trạng thái : <span class="value">Còn hàng</span>
                                                            </p>
                                                        </div>
                                                        <div class="short-description">
                                                            <h2>Quick Overview</h2>
                                                            <div class="std"><?php echo $data['description'] ?></div>
                                                        </div>
                                                        <div class="em-addthis-plug"> <span>Chia sẻ</span>
                                                            <a href="#" target="_blank"><img style="width: 30px;height: 30px;" alt="Facebook" src="<?php Url::base('') ?>/upload/images/social/facebook.png" />
                                                            </a>
<!--                                                            <a href="#" target="_blank"><img alt="Twitter" src="<?php Url::base('') ?>/upload/images/social/twitter.png" />
                                                            </a>-->
                                                            <a href="#" target="_blank"><img style="width: 30px;height: 30px;" alt="Google+" src="<?php Url::base('') ?>/upload/images/social/google_plusone_share.png" />
                                                            </a>
<!--                                                            <a href="#" target="_blank"><img alt="Pinterest" src="<?php Url::base('') ?>/upload/images/social/pinterest.png" />
                                                            </a>-->
<!--                                                            <a href="#" target="_blank"><img alt="LinkedIn" src="<?php Url::base('') ?>/upload/images/social/linkedin.png" />
                                                            </a>-->
<!--                                                            <a href="#" target="_blank"><img alt="Email" src="<?php Url::base('') ?>/upload/images/social/email.png" />
                                                            </a>-->
                                                        </div> 
                                                        <div>

                                                            <p class="availability in-stock">Availability: <span>In stock</span>
                                                            </p>

                                                            <div class="price-box"> <span class="regular-price" id="product-price-206"> <span class="price"  content="750">Giá : <?php echo $data['price'] ?></span> </span>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-box">
                                                            <div class="add-to-cart">
                                                                <label for="qty">Qty:</label>
                                                                <div class="qty_cart">
                                                                    <div class="qty-ctl">
                                                                        <button title="decrease" onclick="changeQty(0);
                                                                                                return false;" class="decrease">decrease</button>
                                                                    </div>
                                                                    <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty" />
                                                                    <div class="qty-ctl">
                                                                        <button title="increase" onclick="changeQty(1);
                                                                                                return false;" class="increase">increase</button>
                                                                    </div>
                                                                </div>
                                                                <ul class="add-to-links">
                                                                    <li><a title="Add to Wishlist" href="#" class="link-wishlist">Add to Wishlist</a>
                                                                    </li>
                                                                    
                                                                </ul>
                                                                <div class="button_addto">
<!--                                                                    <button type="button" title="Buy Now" id="em-buy-now" class="button btn-em-buy-now"><span><span>Buy Now</span></span>
                                                                    </button>-->
                                                                    <button type="button" title="Mua hàng" id="product-addtocart-button" class="button btn-cart btn-cart-detail"><span><span>Mua hàng</span></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearer"></div>
                                    </div> 
                                </form>
                            </div>
                             <div class="row">
                                <div class="em-product-view-primary col-sm-16 first">
                                    <div class="em-product-info ">
                                        <div class="em-product-details ">
                                            <div class="em-details-tabs product-collateral">
                                                <div class="em-details-tabs-content">
                                                    <div class="box-collateral em-line-01 box-description">
                                                        <div class="em-block-title">
                                                            <h2>Chi tiết sản phẩm</h2>
                                                        </div>
                                                        <div class="box-collateral-content">
                                                            <div class="std"><?php echo $data['content'] ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="box-collateral box-tags em-line-01">
                                                        <div class="em-block-title">
                                                            <h2>Đánh giá</h2>
                                                        </div>
                                                        <div class="box-collateral-content">
                                                            <form id="addTagForm" method="get">
                                                                <div class="form-add">
                                                                    <label for="productTagName">Add Your Tags:</label>
                                                                    <div class="input-box">
                                                                        <input type="text" class="input-text required-entry" name="productTagName" id="productTagName" />
                                                                    </div>
                                                                    <button type="button" title="Add Tags" class="button"> <span> <span>Add Tags</span> </span>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-collateral  em-line-01">
                                                        <div class="em-block-title">
                                                            <h2>Custom Tab N</h2>
                                                        </div>
                                                        <div class="box">
                                                            <p>Sample Block Here ...</p>
                                                            <p>A sample of additional collateral tabs that you can insert in static the backend.</p>
                                                        </div>
                                                    </div>
                                                    <div class="box-collateral em-line-01">
                                                        <div class="em-block-title">
                                                            <h2></h2>
                                                        </div>
                                                        <div class="box">
                                                            <p>Sample Block Here ...</p>
                                                            <p>A sample of additional collateral tabs that you can insert in static the backend.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                                                                        
                                        </div>
                                    </div>
                                    <div id="em-product-shop-pos-bottom" style="display:inline-block;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="em-product-view-primary first">
                                    <div id="em-wrapper-related" class="block box-collateral block-related em-line-01">
                                        <div class="em-block-title">
                                            <h2><span>Sản phẩm liên quan</span></h2>
                                        </div>
                                        <div id="em-related" class="block-content">
                                            <p class="block-subtitle">Check items to add to the cart or&nbsp;<a href="#" onclick="selectAllRelated(this);
                                                                    return false;">select all</a>
                                            </p>
                                            <div class="products-grid mini-products-list em-related-slider " id="block-related">
                                                <div class="item">
                                                    <div class="product-item">
                                                        <a href="#" title="All Over Embellished" class="product-image"> <img class="em-img-lazy img-responsive" src="<?php Url::base('') ?>/upload/images/product/180x180/clothing_sp20_2.jpg" width="180" height="180" alt="All Over Embellished" /> </a>
                                                        <div class="product-details product-shop">
                                                            <p class="product-name"><a href="#">All Over Embellished</a>
                                                            </p>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating"></div>
                                                                </div> <span class="amount"><a href="#">(0)</a></span>
                                                            </div>
                                                            <div class="price-box" itemscope itemtype="http://schema.org/Product"> <span class="regular-price" id="product-price-185-related"> <span class="price">$1,200.00</span> </span>
                                                            </div>
                                                             <a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="item">
                                                    <div class="product-item">
                                                        <a href="#" title="River Island Bodycon" class="product-image">
                                                            <ul class="productlabels_icons">
                                                                <li class="label special">
                                                                    <p> <span>-60%</span>
                                                                    </p>
                                                                </li>
                                                            </ul> <img class="em-img-lazy img-responsive" src="<?php Url::base('') ?>/upload/images/product/180x180/clothing_sp11_2.jpg" width="180" height="180" alt="River Island Bodycon    " /> </a>
                                                        <div class="product-details product-shop">
                                                            <p class="product-name"><a href="#">River Island Bodycon</a>
                                                            </p>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" ></div>
                                                                </div> <span class="amount"><a href="#">(0)</a></span>
                                                            </div>
                                                            <div class="price-box" itemscope itemtype="http://schema.org/Product">
                                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price" id="old-price-176-related"> $130.00 </span>
                                                                </p>
                                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price" content="52" id="product-price-176-related"> $52.00 </span>
                                                                </p>
                                                            </div>
                                                            <a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item">
                                                        <a href="#" title="Holographic Elastic" class="product-image"> <img class="em-img-lazy img-responsive" src="<?php Url::base('') ?>/upload/images/product/180x180/clothing_sp1_2.jpg" width="180" height="180" alt="Holographic Elastic    " /> </a>
                                                        <div class="product-details product-shop">
                                                            <p class="product-name"><a href="#">Holographic Elastic</a>
                                                            </p>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating"></div>
                                                                </div> <span class="amount"><a href="#">(0)</a></span>
                                                            </div>
                                                            <div class="price-box" itemscope itemtype="http://schema.org/Product"> <span class="regular-price" id="product-price-166-related"> <span class="price">$750.00</span> </span>
                                                            </div>
                                                            <a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item">
                                                        <a href="#" title="Cut Out Midi Dress" class="product-image"> <img class="em-img-lazy img-responsive" src="<?php Url::base('') ?>/upload/images/product/180x180/clothing_sp12_2.jpg" width="180" height="180" alt="Cut Out Midi Dress    " /> </a>
                                                        <div class="product-details product-shop">
                                                            <p class="product-name"><a href="#">Cut Out Midi Dress</a>
                                                            </p>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:67%"></div>
                                                                </div> <span class="amount"><a href="#">(1)</a></span>
                                                            </div>
                                                            <div class="price-box" itemscope itemtype="http://schema.org/Product"> <span class="regular-price" id="product-price-177-related"> <span class="price">$120.00</span> </span>
                                                            </div>
                                                             <a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="product-item">
                                                        <a href="#" title="SALON Holographic Fold Pleat Skater Dress" class="product-image"> <img class="em-img-lazy img-responsive" src="<?php Url::base('') ?>/upload/images/product/180x180/clothing_sp3_2.jpg" width="180" height="180" alt="SALON Holographic Fold Pleat Skater Dress    " /> </a>
                                                        <div class="product-details product-shop">
                                                            <p class="product-name"><a href="#">SALON Holographic Fold Pleat Skater Dress</a>
                                                            </p>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating"></div>
                                                                </div> <span class="amount"><a href="#">(0)</a></span>
                                                            </div>
                                                            <div class="price-box" itemscope itemtype="http://schema.org/Product"> <span class="regular-price" id="product-price-168-related"> <span class="price">$1,300.00</span> </span>
                                                            </div>
                                                            <a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div> 
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>