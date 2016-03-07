<?php

use yii\helpers;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use app\components\helpers\HelperLink;
use app\widgets\WrapperBannersWidget;
use app\components\utils\TextUtils;

$this->title = $category['title'];
?>

<div class="wrapper-breadcrums">
    <div class="container">
        <div class="row">
            <div class="col-sm-24">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="index.html" title="Home"><span>Trang chủ</span></a> <span class="separator">/ </span>
                        </li>
                        <li class="contact"> <strong> <?php echo $category['title'] ?></strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.wrapper-breadcrums -->
<?= WrapperBannersWidget::widget() ?>
<div class="em-wrapper-main">
    <div class="container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>
            <div class="em-wrapper-area03"></div>
            <div class="em-wrapper-area04"></div>
            <div class="em-main-container em-col1-layout">
                <div class="row">
                    <div class="em-col-main col-sm-24">
                        <div class="page-title category-title">
                            <h1><?php echo $category['title'] ?></h1>
                        </div>
                        <div class="category-products">
                            <div class="toolbar-top">
                                <div class="toolbar">
                                    <div class="pager">
                                        <p class="amount"> Items 1 to 12 of 20 total</p>
                                        <div class="pages">
                                            <ol>
                                                <li class="current">1</li>
                                                <li><a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a class="next i-next" href="#" title="Next"> <img src="<?php echo Url::base('http') ?>/upload/images/pager_arrow_right.gif" alt="Next" class="v-middle" /> </a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div><!-- /.pager -->
                                    <div class="sorter">
                                        <p class="view-mode">
                                            <label>View as:</label> <strong title="Grid" class="grid">Grid</strong> <a href="category-one-column-list.html" title="List" class="list">List</a>
                                        </p>
                                        <div class="sort-by toolbar-switch">
                                            <div class="toolbar-title">
                                                <label>Sắp xếp</label>
                                                <select class="sortby" name="sortby">
                                                    <option value="name-product" selected="selected">Tên sản phẩm</option>
                                                    <option value="price-product"> Giá</option>
                                                    <option value="product-time"> Mới nhất</option>
                                                </select>
                                            </div>
                                            <a href="#" title="Set Descending Direction"><img src="<?php Url::base('') ?>/upload/images/i_asc_arrow.png" alt="Set Descending Direction" class="v-middle" />
                                            </a>
                                        </div>
                                        <div class="limiter toolbar-switch">
                                            <div class="toolbar-title">
                                                <label>Hiển thị</label>
                                                <select class="toolbar-show">
                                                    <option  value="15" selected="selected"> 15 sản phẩm</option>
                                                    <option value="20"> 20 sản phẩm</option>
                                                    <option value="25"> 25 sản phẩm</option>
                                                    <option value="30"> 30 sản phẩm</option>
                                                </select>                                                
                                            </div>
                                        </div>
                                    </div><!-- /.sorter -->
                                </div>
                            </div><!-- /.toolbar-top -->
                            <div id="em-grid-mode">
                                <ul class="emcatalog-grid-mode products-grid emcatalog-disable-hover-below-mobile">
                                    <?php foreach($data as $value) { ?>
                                        <li class="item">
                                            <div class="product-item">
                                                <div class="product-shop-top">
                                                    <a href="<?php echo HelperLink::rewriteUrl($value['id'], $value['title'], Yii::$app->params['urlSite']['detail']) ?>" title="<?php echo $value['title'] ?>" class="product-image">
                                                        <img class="em-img-lazy img-responsive em-alt-hover" src="<?php echo Url::base('http') ?>/<?php echo $value['image_path'].$value['filename'] ?>" width="220" height="220" alt="WIASSI Version 1" />
                                                        <img id="product-collection-image-206" class="em-img-lazy img-responsive em-alt-org" src="<?php echo Url::base('http') ?>/<?php echo $value['image_path'].$value['filename'] ?>" width="220" height="220" alt="WIASSI Version 1" />
                                                        <span class="bkg-hover"></span> 
                                                    </a>
                                                    <div class="bottom">
                                                        <div class="em-btn-addto text-center ">
                                                            <button type="button" title="Mua hàng" class="button btn-cart" data-button="<?php echo $value['id'] ?>" onclick="206"><span><span>Mua hàng</span></span>
                                                            </button>
                                                            <ul class="add-to-links">
                                                                <li><a href="#206" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                </li>                                                                
                                                            </ul>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                                <div class="product-shop">
                                                    <div class="f-fix">
                                                        <h2 class="product-name text-center  "><a href="<?php echo HelperLink::rewriteUrl($value['id'], $value['title'], Yii::$app->params['urlSite']['detail']) ?>" title=" <?php echo $value['title'] ?>"> <?php echo $value['title'] ?></a></h2>
                                                        <div class=" text-center">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:1%"></div>
                                                                </div> <span class="amount"><a href="#" onclick="206">(0)</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="text-center ">
                                                            <div class="price-box"> <span class="regular-price" id="product-price-206"> <span class="price"  content="750"><?= TextUtils::numberFormat($value['price']) ?>đ</span> </span>
                                                            </div>
                                                        </div>
<!--                                                        <div class="desc std text-center em-element-display-hover"> <?php echo $value['description'] ?></div>-->
                                                    </div>
                                                </div>
                                            </div><!-- /.product-item -->
                                        </li>
                                    <?php } ?>                                    
                                </ul>
                            </div><!-- /.em-grid-mode -->

                            <div class="toolbar-bottom em-box-03">
                                <div class="toolbar">
                                    <div class="pager">
                                        <?php
                                            echo LinkPager::widget([
                                                'pagination' => $pages,
                                                'prevPageLabel' => '<<',
                                                'nextPageLabel' => '>>',
                                                //'lastPageLabel'=>'LAST',
                                                //'firstPageLabel'=>'FIRST',
                                                'maxButtonCount'=>10

                                            ]);
                                        ?>                                        
                                        <div class="pages">                                            
                                        </div>
                                    </div><!-- /.pager -->
                                    <div class="sorter">
                                        <p class="view-mode">
                                            <label>View as:</label> <strong title="Grid" class="grid">Grid</strong> <a href="category-one-column-list.html" title="List" class="list">List</a>
                                        </p>
                                        <div class="sort-by toolbar-switch">
                                            <div class="toolbar-title">
                                                <label>Sort By</label>
                                                <select class="sortby" name="sortby">
                                                    <option value="position" selected="selected"> Position</option>
                                                    <option value="name"> Name</option>
                                                    <option value="price"> Price</option>
                                                </select>
                                            </div>
                                            <a href="#" title="Set Descending Direction"><img src="<?php Url::base('') ?>/upload/images/i_asc_arrow.png" alt="Set Descending Direction" class="v-middle" />
                                            </a>
                                        </div>
<!--                                        <div class="limiter toolbar-switch">
                                            <div class="toolbar-title">
                                                <label>Show</label>
                                                <select class="toolbar-show">
                                                    <option value="12" selected="selected"> 12</option>
                                                    <option value="24"> 24</option>
                                                    <option value="36"> 36</option>
                                                </select>
                                            </div>
                                        </div>-->
                                    </div><!-- /.sorter -->
                                </div>
                            </div><!-- /.toolbar-bottom -->
                        </div><!-- /.category-products -->
                    </div>
                </div>
            </div><!-- /.em-main-container -->
        </div>
    </div>
</div><!-- /.em-wrapper-main -->                
