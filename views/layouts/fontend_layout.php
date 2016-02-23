<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\MenuLeftWidget;
use app\widgets\SlidederWidget;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
       
    </head>
    <body class="cms-index-index">
        <?php $this->beginBody() ?>
            <div class="wrapper ">
            <noscript>
                <div class="global-site-notice noscript">
                    <div class="notice-inner">
                        <p> <strong>JavaScript seems to be disabled in your browser.</strong>
                            <br /> You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
                    </div>
                </div>
            </noscript>
            <div class="page two-columns-left">
                
                <div class="em-wrapper-header">
                    <div id="em-mheader" class="visible-xs container">
                    <div id="em-mheader-top" class="row">
                        <div id="em-mheader-logo" class="col-xs-4">
                            <div class="em-logo"><a href="index.html" title="Fashion Commerce" class="logo"><strong>Fashion Commerce</strong><img src="upload/images/logo_small.png" alt="Fashion Commerce" /></a>
                            </div>
                        </div><!-- /#em-mheader-logo -->
                        <div class="col-xs-20">
                            <div class="em-top-search">
                                <div class="em-header-search-mobile">
                                    <form method="get">
                                        <div class="form-search no_cate_search">
                                            <div class="text-search">
                                                <input id="search-mobile" type="text" name="q" value="" class="input-text" maxlength="128" />
                                                <button type="submit" title="Search" class="button"><span><span>Search</span></span>
                                                </button>
                                                <div id="search_autocomplete_mobile" class="search-autocomplete"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- /.em-header-search-mobile -->
                            </div><!-- /.em-top-search -->
                            <div class="em-top-cart">
                                <div class="em-wrapper-topcart-mobile em-no-quickshop">
                                    <div class="em-container-topcart">
                                        <div class="em-summary-topcart">
                                            <a id="em-amount-cart-link" title="Shopping Cart" class="em-amount-topcart" href="cart.html"> <span class="em-topcart-text">My Cart:</span> <span class="em-topcart-qty">0</span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.em-top-cart -->
                            <div id="em-mheader-wrapper-menu"> <span class="visible-xs fa fa-bars" id="em-mheader-menu-icon"></span>
                                <div id="em-mheader-menu-content" style="display: none;">
                                    <div class="em-wrapper-top">
                                        <div class="em-language-currency row">
                                            <div class="col-sm-24">
                                                <div class="form-language em-language-style-mobile">
                                                    <ul>
                                                        <li class="selected">
                                                            <a href="#" title="English"> <img alt="english" src="upload/images/language/english.png" /> </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" title="French"> <img alt="french" src="upload/images/language/french.png" /> </a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#" title="German"> <img alt="german" src="upload/images/language/german.png" /> </a>
                                                        </li>
                                                    </ul>
                                                </div> /.form-language 
                                                <div class="em-currency-style-mobile">
                                                    <ul class="list-inline">
                                                        <li class=""> <a href="#"> AUD </a>
                                                        </li>
                                                        <li class=""> <a href="#"> EUR </a>
                                                        </li>
                                                        <li class=" selected"> <a href="#"> USD </a>
                                                        </li>
                                                    </ul>
                                                </div> /.em-currency-style-mobile 
                                            </div>
                                        </div> /.em-language-currency 
                                        <div class="em-top-links row">
                                            <div class="">
                                                <ul class="top-header-link links">
                                                    <li class="first col-xs-8"> <a title="Log In" class="login-link fa fa-user" href="#"><span>Log In</span></a>
                                                    </li>
                                                    <li class="col-xs-8"> <a title="Sign up" class='signup-link fa fa-sign-out' href="#"><span>Sign up</span></a>
                                                    </li>
                                                    <li class="last col-xs-8"> <a href="#" class="checkout-link fa fa-shopping-cart"><span>Cart</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- /.em-top-links -->
                                    </div><!-- /.em-wrapper-top -->
                                    <div class="row mobile-main-menu toggle-menu">
                                        <div class="col-sm-24">
                                            <div class="em-top-menu">
                                                <div class="em-menu-mobile">
                                                    <div class="megamenu-wrapper wrapper-7_5505">
                                                        <div class="em_nav" id="toogle_menu_7_5505">
                                                            <ul class="hnav em_menu_mobile">
                                                                <li class="menu-item-link menu-item-depth-0 fa fa-home menu-item-parent">
                                                                    <a class="em-menu-link" href="#"> <span> Home </span> </a>
                                                                    <ul class="menu-container">
                                                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col9 grid_18 menu-item-parent" style="">
                                                                            <ul class="menu-container">
                                                                                <li class="menu-item-vbox menu-item-depth-2 col-sm-12 menu-item-parent" style="">
                                                                                    <ul class="menu-container">
                                                                                        <li class="menu-item-text menu-item-depth-3  ">
                                                                                            <ul class="em-line-01">
                                                                                                <li>
                                                                                                    <h4>Layout styles</h4>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <ul class="menu-link">
                                                                                                        <li><a href="index.html">Home Default</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Home Style 02</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Home Style 03</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Home Style 04</a>
                                                                                                        </li>
                                                                                                    </ul><!-- /.menu-link -->
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li><!-- /.menu-item-vbox -->
                                                                                <li class="menu-item-vbox menu-item-depth-2 col-sm-12 menu-item-parent" style="">
                                                                                    <ul class="menu-container">
                                                                                        <li class="menu-item-text menu-item-depth-3  ">
                                                                                            <div class="em-line-01">
                                                                                                <h4>Header styles</h4>
                                                                                                <div>
                                                                                                    <ul class="menu-link">
                                                                                                        <li><a href="index.html">Header Style 01</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Header Style 02</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Header Style 04</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Header Style 03</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li><!-- /.menu-item-vbox -->
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li><!-- /.menu-item-link -->
                                                                <li class="menu-item-link menu-item-depth-0 dd-menu-link fa fa-bars menu-item-parent">
                                                                    <a class="em-menu-link" href="#"> <span> Category </span> </a>
                                                                    <ul class="menu-container">
                                                                        <li class="menu-item-text menu-item-depth-1  ">
                                                                            <ul class="em-catalog-navigation vertical">
                                                                                <li class="level0 nav-1 first parent">
                                                                                    <a href="#"> <span>Furniture</span> </a>
                                                                                    <ul class="level0">
                                                                                        <li class="level1 nav-1-1 first">
                                                                                            <a href="#"> <span>Living Room</span> </a>
                                                                                        </li>
                                                                                        <li class="level1 nav-1-2 last">
                                                                                            <a href="#"> <span>Bedroom</span> </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li><!-- /.nav-1 -->
                                                                                <li class="level0 nav-2 parent">
                                                                                    <a href="#"> <span>Electronics</span> </a>
                                                                                    <ul class="level0">
                                                                                        <li class="level1 nav-2-1 first">
                                                                                            <a href="#"> <span>Cell Phones</span> </a>
                                                                                        </li>
                                                                                        <li class="level1 nav-2-2 parent">
                                                                                            <a href="#"> <span>Cameras</span> </a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2 nav-2-2-1 first">
                                                                                                    <a href="#"> <span>Accessories</span> </a>
                                                                                                </li>
                                                                                                <li class="level2 nav-2-2-2 last">
                                                                                                    <a href="#"> <span>Digital Cameras</span> </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="level1 nav-2-3 last parent">
                                                                                            <a href="#"> <span>Computers</span> </a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2 nav-2-3-3 first">
                                                                                                    <a href="#"> <span>Build Your Own</span> </a>
                                                                                                </li>
                                                                                                <li class="level2 nav-2-3-4">
                                                                                                    <a href="#"> <span>Laptops</span> </a>
                                                                                                </li>
                                                                                                <li class="level2 nav-2-3-5">
                                                                                                    <a href="#"> <span>Hard Drives</span> </a>
                                                                                                </li>
                                                                                                <li class="level2 nav-2-3-6">
                                                                                                    <a href="#"> <span>Monitors</span> </a>
                                                                                                </li>
                                                                                                <li class="level2 nav-2-3-7">
                                                                                                    <a href="#"> <span>RAM / Memory</span> </a>
                                                                                                </li>
                                                                                                <li class="level2 nav-2-3-8">
                                                                                                    <a href="#"> <span>Cases</span> </a>
                                                                                                </li>
                                                                                                <li class="level2 nav-2-3-9">
                                                                                                    <a href="#"> <span>Processors</span> </a>
                                                                                                </li>
                                                                                                <li class="level2 nav-2-3-10 last">
                                                                                                    <a href="#"> <span>Peripherals</span> </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li><!-- /.nav-2 -->
                                                                                <li class="level0 nav-3 parent">
                                                                                    <a href="#"> <span>Apparel</span> </a>
                                                                                    <ul class="level0">
                                                                                        <li class="level1 nav-3-1 first">
                                                                                            <a href="#"> <span>Shirts</span> </a>
                                                                                        </li>
                                                                                        <li class="level1 nav-3-2 parent">
                                                                                            <a href="#"> <span>Shoes</span> </a>
                                                                                            <ul class="level1">
                                                                                                <li class="level2 nav-3-2-1 first">
                                                                                                    <a href="#"> <span>Mens</span> </a>
                                                                                                </li>
                                                                                                <li class="level2 nav-3-2-2 last">
                                                                                                    <a href="#"> <span>Womens</span> </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li class="level1 nav-3-3 last">
                                                                                            <a href="#"> <span>Hoodies</span> </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li><!-- /.nav-3 -->
                                                                                <li class="level0 nav-4">
                                                                                    <a href="#"> <span>Fashion</span> </a>
                                                                                </li><!-- /.nav-4 -->
                                                                                <li class="level0 nav-5">
                                                                                    <a href="#"> <span>Shoes</span> </a>
                                                                                </li><!-- /.nav-5 -->
                                                                                <li class="level0 nav-6">
                                                                                    <a href="#"> <span>Glasses</span> </a>
                                                                                </li><!-- /.nav-6 -->
                                                                                <li class="level0 nav-7">
                                                                                    <a href="#"> <span>Baby</span> </a>
                                                                                </li><!-- /.nav-7 -->
                                                                                <li class="level0 nav-8">
                                                                                    <a href="#"> <span>Sport &amp; Outdoor</span> </a>
                                                                                </li><!-- /.nav-8 -->
                                                                                <li class="level0 nav-9">
                                                                                    <a href="#"> <span>Swatch</span> </a>
                                                                                </li><!-- /.nav-9 -->
                                                                                <li class="level0 nav-10">
                                                                                    <a href="#"> <span>Jewelry</span> </a>
                                                                                </li><!-- /.nav-10 -->
                                                                                <li class="level0 nav-11">
                                                                                    <a href="#"> <span>Home Garden</span> </a>
                                                                                </li><!-- /.nav-11 -->
                                                                                <li class="level0 nav-12">
                                                                                    <a href="#"> <span>Lingerie</span> </a>
                                                                                </li><!-- /.nav-12 -->
                                                                                <li class="level0 nav-13">
                                                                                    <a href="#"> <span>Beauty</span> </a>
                                                                                </li><!-- /.nav-13 -->
                                                                                <li class="level0 nav-14 last">
                                                                                    <a href="#"> <span>Game &amp; Movies</span> </a>
                                                                                </li><!-- /.nav-14 -->
                                                                            </ul><!-- /.em-catalog-navigation -->
                                                                        </li>
                                                                    </ul>
                                                                </li><!-- /.menu-item-link -->
                                                                <li class="menu-item-link menu-item-depth-0 fa fa-file menu-item-parent">
                                                                    <a class="em-menu-link" href="#"> <span> Products </span> </a>
                                                                    <ul class="menu-container">
                                                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col16 grid_16 menu-item-parent" style="">
                                                                            <ul class="menu-container">
                                                                                <li class="menu-item-vbox menu-item-depth-2 col-sm-8 grid_8 alpha menu-item-parent" style="">
                                                                                    <ul class="menu-container">
                                                                                        <li class="menu-item-text menu-item-depth-3  ">
                                                                                            <div class="em-line-01">
                                                                                                <h5 class="text-uppercase">Product Types</h5>
                                                                                                <div>
                                                                                                    <ul class="menu-container">
                                                                                                        <li class="menu-item-link menu-item-depth-1 first label-hot-menu"><a class="em-menu-link" href="product-simple.html">Simple product</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1"><a class="em-menu-link" href="product-virtual.html">Virtual Product</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1"><a class="em-menu-link" href="product-downloadable.html">Downloadable Product</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1"><a class="em-menu-link" href="product-configurable.html">Configurable Product</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1"><a class="em-menu-link" href="product-grouped.html">Grouped Product</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1 last"><a class="em-menu-link" href="product-bundle.html">Bundle Product</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li><!-- /.menu-item-vboxc -->
                                                                                <li class="menu-item-vbox menu-item-depth-2 col-sm-8 grid_8 omega menu-item-parent" style="">
                                                                                    <ul class="menu-container">
                                                                                        <li class="menu-item-text menu-item-depth-3  ">
                                                                                            <div class="em-line-01">
                                                                                                <h5 class="text-uppercase">PRODUCT COLUMNS</h5>
                                                                                                <div>
                                                                                                    <ul class="menu-container">
                                                                                                        <li class="menu-item-link menu-item-depth-1 first"><a class="em-menu-link" href="product-1-column.html">1 Column</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="product-2-columns-left.html">2 Columns Left</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="product-2-columns-right.html">2 Columns Right</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="product-3-columns.html">3 Columns</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="product-upsell.html">Upsell</a>
                                                                                                        </li>
                                                                                                        <li class="menu-item-link menu-item-depth-1 last"><a class="em-menu-link" href="product-related.html">Related Product</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li><!-- /.menu-item-vboxc -->
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li><!-- /.menu-item-link -->
                                                            </ul>
                                                        </div>
                                                    </div><!-- /.megamenu-wrapper -->
                                                </div>
                                            </div><!-- /.em-top-menu -->
                                        </div>
                                    </div><!-- /.mobile-main-menu -->
                                    <div class="row mobile-block">
                                        <div class="col-sm-24">
                                            <ul class="em-mobile-help">
                                                <li><a href="#" target="_blank"><span class="fa fa-download">&nbsp;</span>Download App</a>
                                                </li>
                                                <li><a href="#"><span class="fa fa-question-circle">&nbsp;</span>Help Center</a>
                                                </li>
                                                <li><a href="#"><span class="fa fa-star">&nbsp;</span>Feedback</a>
                                                </li>
                                                <li><a href="#"><span class="fa fa-comment-o">&nbsp;</span>Blog</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.mobile-block -->
                                </div>
                            </div><!-- /.em-mheader-wrapper-menu -->
                        </div>
                    </div><!-- /#em-mheader-top -->
                    </div><!-- /#em-mheader -->
                    <div class="hidden-xs em-header-style08">
                        <div class="em-header-top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-24">
                                        <div class="f-left">
                                        </div><!-- /.f-left -->
                                        <div class="">
                                            <div class="em-search f-right">
                                                <div class="em-top-search">
                                                    <div class="em-wrapper-js-search em-search-style01">
                                                        <div class="em-wrapper-search em-no-category-search"> <a class="em-search-icon" title="Tìm kiếm" href="javascript:void(0);"><span>Tìm kiếm</span></a>
                                                            <div class="em-container-js-search" style="display: none;">
                                                                <form id="search_mini_form" method="get">
                                                                    <div class="form-search no_cate_search">
                                                                        <div class="text-search">
                                                                            <label for="search">Tìm kiếm:</label>
                                                                            <input id="search" type="text" name="q" value="" class="input-text" maxlength="128" placeholder="Nhập nội dung tìm kiếm..." />
                                                                            <button type="submit" title="Tìm kiếm" class="button"><span><span>Tìm kiếm</span></span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form><!-- /#search_mini_form -->
                                                            </div>
                                                        </div>
                                                    </div><!-- /.em-wrapper-js-search -->
                                                </div>
                                            </div><!-- /.em-search -->
                                            <div class="em-top-links">
                                                <div class="f-right"></div>
                                                <div class="f-right">
                                                    <ul class="em-links-wishlist">
                                                        <li class="first last"><a href="wishlist.html" title="Sản phẩm yêu thích">Sản phẩm yêu thích</a></li>
                                                    </ul>
                                                </div>
                                                <ul class="list-inline f-right">
                                                    <li><a class="em-register-link" href="register.html" title="Đăng ký">Đăng ký</a></li>
                                                </ul>
                                                <div id="em-login-link" class="account-link f-right em-non-login"> 
                                                    <a href="login.html" class="link-account" id="link-login" title="Đăng nhập">Đăng nhập</a>
                                                    <div class="em-account" id="em-account-login-form" style="display: none;">
                                                        <form method="post" id="top-login-form">
                                                            <input name="form_key" type="hidden" value="LqnwQyvcDpOju7G3" />
                                                            <div class="block-content">
                                                                <p class="login-title h6 primary">Login</p>
                                                                <p class="login-desc">If you have an account with us, please log in.</p>
                                                                <ul class="form-list">
                                                                    <li>
                                                                        <label for="mini-login">Tên tài khoản<em>*</em>
                                                                        </label>
                                                                        <input type="text" name="login[username]" id="mini-login" class="input-text required-entry validate-email" />
                                                                    </li>
                                                                    <li>
                                                                        <label for="mini-password">Mật khẩu<em>*</em>
                                                                        </label>
                                                                        <input type="password" name="login[password]" id="mini-password" class="input-text required-entry validate-password" />
                                                                    </li>
                                                                    <li><span class="required">* Required Fields</span>
                                                                    </li>
                                                                </ul>
                                                                <div class="action-forgot">
                                                                    <div class="login_forgotpassword">
                                                                        <p><a href="#">Quên mật khẩu?</a>
                                                                        </p>
                                                                        <p><span>Don't have an account?</span><a class="create-account-link-wishlist" href="h.html#" title="Sign Up">Sign Up</a>
                                                                        </p>
                                                                    </div>
                                                                    <div class="actions">
                                                                        <button type="submit" class="button"><span><span>Login</span></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form><!-- /#top-login-form -->
                                                    </div><!-- /#em-account-login-form -->
                                                </div><!-- /#em-login-link -->
                                            </div><!-- /.em-top-links -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.em-header-top -->
                        <div id="em-fixed-top"></div>
                        <div class="em-header-bottom em-fixed-top">
                            <div class="container em-menu-fix-pos">
                                <div class="row">
                                    <div class="col-sm-24">
                                        <div class="em-logo f-left"><a href="index.html" title="Fashion Commerce" class="logo"><strong>Fashion Commerce</strong><img class="retina-img" src="upload/images/logo.png" alt="Fashion Commerce" /></a>
                                        </div>
                                        <div class="em-logo-sticky f-left">
                                            <a href="index.html" title="Fashion Commerce" class="logo"><img src="upload/images/logo_small.png" alt="Fashion Commerce" />
                                            </a>
                                        </div>
                                        <div class="em-search em-search-sticky f-right">
                                            <div class="em-top-search">
                                                <div class="em-wrapper-js-search em-search-style01">
                                                    <div class="em-wrapper-search"> <a class="em-search-icon" title="Tìm kiếm" href="javascript:void(0);"><span>Tìm kiếm</span></a>
                                                        <div class="em-container-js-search" style="display: none;">
                                                            <form id="search_mini_form_fixed_top" method="get">
                                                                <div class="form-search">
                                                                    <label for="search">Tìm kiếm:</label>
                                                                    <input id="search-fixed-top" type="text" name="q" value="" class="input-text" maxlength="128" placeholder="Search entire store here..." />
                                                                    <button type="submit" title="Search" class="button"><span><span>Tìm kiêm</span></span>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- /.em-wrapper-js-search -->
                                            </div>
                                        </div><!-- /.em-search -->
                                        <div class="em-top-cart-sticky em-top-cart f-right">
                                            <div class="em-wrapper-js-topcart em-wrapper-topcart em-no-quickshop">
                                                <div class="em-container-topcart">
                                                    <div class="em-summary-topcart">
                                                        <a class="em-amount-js-topcart em-amount-topcart" title="Giỏ hàng" href="cart.html"> <span class="em-topcart-text">My Cart:</span> <span class="em-topcart-qty">1</span> </a>
                                                    </div>
                                                    <div class="em-container-js-topcart topcart-popup" style="display:none">
                                                        <div class="topcart-popup-content">
                                                            <p class="em-block-subtitle">Giỏ hàng</p>
                                                            <div class="topcart-content">
                                                                <p class="amount-content "> Bạn có 1 sản phẩm trong giỏ hàng.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.em-wrapper-js-topcart -->
                                        </div><!-- /.em-top-cart -->
                                        <div class="em-menu-hoz f-right">
                                            <div id="em-main-megamenu">
                                                <div class="em-menu">
                                                    <div class="megamenu-wrapper wrapper-4_7164">
                                                        <div class="em_nav" id="toogle_menu_4_7164">
                                                            <ul class="hnav em_hoz_menu effect-menu">
                                                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                                    <a class="em-menu-link" href="#"> <span> Trang chủ </span> </a>
                                                                    <!-- /.menu-container -->
                                                                </li><!-- /.menu-item-link -->
                                                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                                    <a class="em-menu-link" href="#"> <span> Giới thiệu </span> </a>
                                                                    <!-- /.menu-container -->
                                                                </li><!-- /.menu-item-link -->
                                                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                                    <a class="em-menu-link" href="#"> <span> Sản phẩm </span> </a>
                                                                    <ul class="menu-container" style="dropdown-menu">
                                                                        <li class="menu-item-vbox menu-item-depth-1 col-menu menu_col5 grid_6 menu-item-parent" style="">
                                                                            <ul class="menu-container">
                                                                                <li class="menu-item-text menu-item-depth-2  col-md-24 ">
                                                                                    <div class="em-line-01">
                                                                                        <h5 class="text-uppercasse">AJAXCART</h5>
                                                                                        <div>
                                                                                            <ul class="menu-container" style="">
                                                                                                <li class="menu-item-link menu-item-depth-1 first"> <a class="em-menu-link" href="#"><span>Landing Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 "> <a class="em-menu-link" href="typography.html"><span>Typography Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 "> <a class="em-menu-link" href="#"><span>Widgets Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 label-new-menu "> <a class="em-menu-link" href="contact.html"><span>Contact Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 last "> <a class="em-menu-link" href="404.html"><span>404 Page</span> </a>
                                                                                                </li>
                                                                                            </ul><!-- /.menu-container -->
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul><!-- /.menu-container -->
                                                                </li><!-- /.menu-item-link -->
                                                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                                    <a class="em-menu-link" href="#"> <span> Khuyến mại </span> </a>
                                                                    <ul class="menu-container" style="dropdown-menu">
                                                                        <li class="menu-item-vbox menu-item-depth-1 col-menu menu_col5 grid_6 menu-item-parent" style="">
                                                                            <ul class="menu-container">
                                                                                <li class="menu-item-text menu-item-depth-2  col-md-24 ">
                                                                                    <div class="em-line-01">
                                                                                        <h5 class="text-uppercasse">AJAXCART</h5>
                                                                                        <div>
                                                                                            <ul class="menu-container" style="">
                                                                                                <li class="menu-item-link menu-item-depth-1 first"> <a class="em-menu-link" href="#"><span>Landing Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 "> <a class="em-menu-link" href="typography.html"><span>Typography Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 "> <a class="em-menu-link" href="#"><span>Widgets Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 label-new-menu "> <a class="em-menu-link" href="contact.html"><span>Contact Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 last "> <a class="em-menu-link" href="404.html"><span>404 Page</span> </a>
                                                                                                </li>
                                                                                            </ul><!-- /.menu-container -->
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul><!-- /.menu-container -->
                                                                </li><!-- /.menu-item-link -->
                                                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                                    <a class="em-menu-link" href="#"> <span> Tin tức </span> </a>
                                                                    <ul class="menu-container" style="dropdown-menu">
                                                                        <li class="menu-item-vbox menu-item-depth-1 col-menu menu_col5 grid_6 menu-item-parent" style="">
                                                                            <ul class="menu-container">
                                                                                <li class="menu-item-text menu-item-depth-2  col-md-24 ">
                                                                                    <div class="em-line-01">
                                                                                        <h5 class="text-uppercasse">AJAXCART</h5>
                                                                                        <div>
                                                                                            <ul class="menu-container" style="">
                                                                                                <li class="menu-item-link menu-item-depth-1 first"> <a class="em-menu-link" href="#"><span>Landing Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 "> <a class="em-menu-link" href="typography.html"><span>Typography Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 "> <a class="em-menu-link" href="#"><span>Widgets Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 label-new-menu "> <a class="em-menu-link" href="contact.html"><span>Contact Page</span> </a>
                                                                                                </li>
                                                                                                <li class="menu-item-link menu-item-depth-1 last "> <a class="em-menu-link" href="404.html"><span>404 Page</span> </a>
                                                                                                </li>
                                                                                            </ul><!-- /.menu-container -->
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul><!-- /.menu-container -->
                                                                </li><!-- /.menu-item-link -->
                                                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                                    <a class="em-menu-link" href="#"> <span> Liên hệ </span> </a>
                                                                    <!-- /.menu-container -->
                                                                </li><!-- /.menu-item-link -->
                                                            </ul><!-- /.hnav em_hoz_menu -->
                                                        </div><!-- /.em_nav -->
                                                    </div><!-- /.megamenu-wrapper -->
                                                </div><!-- /.em-menu -->
                                            </div><!-- /#em-main-megamenu -->
                                        </div><!-- /.em-menu-hoz -->
                                    </div>
                                </div>
                            </div><!-- /.container -->
                        </div><!-- /.em-header-bottom -->
                    </div>
                </div><!-- /.em-wrapper-header -->

                <div class="em-wrapper-main">
                    <div class="container container-main">
                        <div class="em-inner-main">
                            <div class="em-wrapper-area01">
                                <div class="row em-wrapper-ads-13 hidden-xs">
                                    <div class="text-box col-sm-8"><a class="icon-banner-left pull-left" title="Tech Support 247" href="#"><em class="fa fa-fw"></em></a>
                                        <div class="em-banner-right">
                                            <h5><a title="Tech Support 247" href="#">RETURN &amp; EXCHANGE</a></h5>
                                            <p>Vintage pastel tucked t-shirt leather cami</p>
                                        </div>
                                    </div>
                                    <div class="text-box col-sm-8"><a class="icon-banner-left pull-left" title="Free shipping all order" href="#"><em class="fa fa-fw"></em></a>
                                        <div class="em-banner-right">
                                            <h5><a title="Free shipping all order" href="#">Free shipping</a></h5>
                                            <p>Get Free Shipping on all orders</p>
                                        </div>
                                    </div>
                                    <div class="text-box col-sm-8"><a class="icon-banner-left pull-left" title="30 days return" href="#"><em class="fa fa-fw"></em></a>
                                        <div class="em-banner-right">
                                            <h5><a title="30 days return" href="#">MEMBER DISCOUNT</a></h5>
                                            <p>The total billed is discount for member</p>
                                        </div>
                                    </div>
                                </div><!-- /.em-wrapper-ads-13-->
                            </div><!-- /.em-wrapper-area01 -->

                            <div class="em-main-container em-col2-left-layout">
                                <div class="row">
                                    <div class="col-sm-18 col-sm-push-6 em-col-main">
                                        <?= SlidederWidget::widget() ?>
                                        <!-- /.em-wrapper-area03 -->
                                        <div class="std"></div>
                                        <div class="row hidden-xs">
                                            <div class="em-wrapper-banners">
                                                <div class="col-sm-8  text-center">
                                                    <div class="img-banner">
                                                        <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_06.jpg" /> </a>
                                                        <a class="banner-text effect-line" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_text_01.png" /> </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8  img-banner text-center">
                                                    <div class="effect-hover-text4">
                                                        <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_07.jpg" /> </a>
                                                        <a class="banner-text effect-line" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_text_02.png" /> </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 text-center">
                                                    <div class="img-banner">
                                                        <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_08.jpg" /> </a>
                                                        <a class="banner-text effect-line" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_text_03.png" /> </a>
                                                    </div>
                                                </div>
                                            </div><!-- /.em-wrapper-banners -->
                                        </div>

                                        <div class="em-wrapper-new-arrivals-tabs">
                                            <div class="em-new-arrivals-tabs em-line-01">
                                                <div class="emtabs-ajaxblock-loaded">
                                                    <div class="em-tabs-widget tabs-widget ">
                                                        <div class="widget-title em-widget-title">
                                                            <h3><span>New Arrivals</span></h3>
                                                        </div>
                                                        <div id="emtabs_1" class="em-tabs emtabs r-tabs">
                                                            <ul class="em-tabs-control tabs-control r-tabs-nav">
                                                                <li class="r-tabs-tab r-tabs-state-active">
                                                                    <a class="r-tabs-anchor active" href="#tab_emtabs_1_1" data-hover="Shirt"> <span class="icon"></span>Shirt</a>
                                                                </li>
                                                                <li class="r-tabs-state-default r-tabs-tab">
                                                                    <a class="r-tabs-anchor" href="#tab_emtabs_1_2" data-hover="Skirt"> <span class="icon"></span>Skirt</a>
                                                                </li>
                                                                <li class="r-tabs-state-default r-tabs-tab">
                                                                    <a class="r-tabs-anchor" href="#tab_emtabs_1_3" data-hover="Dresses"> <span class="icon"></span>Dresses</a>
                                                                </li>
                                                                <li class="r-tabs-state-default r-tabs-tab">
                                                                    <a class="r-tabs-anchor" href="#tab_emtabs_1_4" data-hover="Outerwear"> <span class="icon"></span>Outerwear</a>
                                                                </li>
                                                            </ul>
                                                            <div class="em-tabs-content tab-content">
                                                                <div class="r-tabs-accordion-title active">
                                                                    <a class="r-tabs-anchor" href="#tab_emtabs_1_1"> <span class="icon tab_emtabs_1_1"></span>Shirt</a>
                                                                </div>
                                                                <div id="tab_emtabs_1_1" class="tab-pane tab-item content_tab_emtabs_1_1 r-tabs-panel r-tabs-state-active">
                                                                    <div class="wrapper button-show01 button-hide-text em-wrapper-loaded">
                                                                        <div class="emfilter-ajaxblock-loaded">
                                                                            <div id="em_fashion_new_arrivals_tab01" class="em-grid-20 ">

                                                                                <div class="widget em-filterproducts-grid">
                                                                                    <div class="widget-products em-widget-products">
                                                                                        <div class="emcatalog-desktop-4" id="em-grid-mode-em_fashion_new_arrivals_tab01">
                                                                                            <div class="products-grid ">

                                                                                                <div class="item first" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Embellished Mirror Pastel" class="product-image"><img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/350x350/clothing_sp5_2.jpg" data-original="upload/images/product/350x350/clothing_sp5_2.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">
                                                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/350x350/clothing_sp5_1.jpg" data-original="upload/images/product/350x350/clothing_sp5_1.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#170" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#170" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 19px;" class="product-name"><a href="#" title=" Embellished Mirror Pastel"> Embellished Mirror Pastel</a></h3><div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-170-emprice-2fd1cdd203d2809e7354d43dcdbdb613">
                                                                                                                            <span class="price">$860.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Metallic Midi Cut Out Midi Dress" class="product-image"><img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/350x350/clothing_sp12_2.jpg" data-original="upload/images/product/350x350/clothing_sp12_2.jpg" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/350x350/clothing_sp12_1.jpg" data-original="upload/images/product/350x350/clothing_sp12_1.jpg" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#177" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#177" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 19px;" class="product-name"><a href="#" title=" Metallic Midi Cut Out Midi Dress"> Metallic Midi Cut Out Midi Dress</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:67%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(1)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-177-emprice-659da6b027ea5433ad0a985675d8fd89">
                                                                                                                            <span class="price">$1,200.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Pretty Playsuit" class="product-image">
                                                                                                                <!--show label product - label extension is required-->
                                                                                                                <ul class="productlabels_icons">
                                                                                                                    <li class="label special">
                                                                                                                        <p>
                                                                                                                            <span>-31%</span> </p>
                                                                                                                    </li>
                                                                                                                </ul>

                                                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/350x350/clothing_sp19_2.jpg" data-original="upload/images/product/350x350/clothing_sp19_2.jpg" alt=" Pretty Playsuit" height="350" width="350">
                                                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/350x350/clothing_sp19_1.jpg" data-original="upload/images/product/350x350/clothing_sp19_1.jpg" alt=" Pretty Playsuit" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 19px;" class="product-name"><a href="#" title=" Pretty Playsuit"> Pretty Playsuit</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">

                                                                                                                    <p class="old-price">
                                                                                                                        <span class="price-label">Regular Price:</span>
                                                                                                                        <span class="price" id="old-price-184-emprice-165caa30959cee82d2cf6c2c473c2079">$130.00 </span>
                                                                                                                    </p>

                                                                                                                    <p class="special-price">
                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                        <span class="price" content="90" id="product-price-184-emprice-165caa30959cee82d2cf6c2c473c2079">$90.00</span>
                                                                                                                    </p>


                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- item -->

                                                                                                <div class="item last" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="A Line Skirt" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/350x350/clothing_sp8_2.jpg" data-original="upload/images/product/350x350/clothing_sp8_2.jpg" alt="A Line Skirt" height="350" width="350">
                                                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/350x350/clothing_sp8_1.jpg" data-original="upload/images/product/350x350/clothing_sp8_1.jpg" alt="A Line Skirt" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 19px;" class="product-name"><a href="#" title="A Line Skirt">A Line Skirt</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-173-emprice-897fea772af63e74d163fe59805544c1">
                                                                                                                            <span class="price">$1,750.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- item -->

                                                                                                <div class="item first" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="ASOS Jumpsuit " class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/350x350/clothing_sp13_2.jpg" data-original="upload/images/product/350x350/clothing_sp13_2.jpg" alt="ASOS Jumpsuit " height="350" width="350">
                                                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/350x350/clothing_sp13_1.jpg" data-original="upload/images/product/350x350/clothing_sp13_1.jpg" alt="ASOS Jumpsuit " height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 19px;" class="product-name"><a href="#" title="ASOS Jumpsuit ">ASOS Jumpsuit </a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-178-emprice-9ed0fbe8322cef83de3614f9429858a0">
                                                                                                                            <span class="price">$860.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="ASOS Mini Skirt" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/350x350/clothing_sp6_2.jpg" data-original="upload/images/product/350x350/clothing_sp6_2.jpg" alt="ASOS Mini Skirt" height="350" width="350">
                                                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/350x350/clothing_sp6_1.jpg" data-original="upload/images/product/350x350/clothing_sp6_1.jpg" alt="ASOS Mini Skirt" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 19px;" class="product-name"><a href="#" title="ASOS Mini Skirt">ASOS Mini Skirt</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-171-emprice-64eb24330300306ae96c18616bf09a7c">
                                                                                                                            <span class="price">$900.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="Cross Back Dress" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/350x350/clothing_sp1_2.jpg" data-original="upload/images/product/350x350/clothing_sp1_2.jpg" alt="Cross Back Dress" height="350" width="350">
                                                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/350x350/clothing_sp1_1.jpg" data-original="upload/images/product/350x350/clothing_sp1_1.jpg" alt="Cross Back Dress" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#166" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#166" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 19px;" class="product-name"><a href="#" title="Cross Back Dress">Cross Back Dress</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-166-emprice-f0de656552639da1cb58e7195d5479bf">
                                                                                                                            <span class="price">$750.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- item -->

                                                                                                <div class="item last" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="Drape Back Playsuit " class="product-image">
                                                                                                                <!--show label product - label extension is required-->
                                                                                                                <ul class="productlabels_icons">
                                                                                                                    <li class="label hot">
                                                                                                                        <p>
                                                                                                                            Hot </p>
                                                                                                                    </li>
                                                                                                                    <li class="label special">
                                                                                                                        <p>
                                                                                                                            <span>-14%</span> </p>
                                                                                                                    </li>
                                                                                                                </ul>

                                                                                                                <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/350x350/clothing_sp17_2.jpg" data-original="upload/images/product/350x350/clothing_sp17_2.jpg" alt="Drape Back Playsuit " height="350" width="350">
                                                                                                                <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/350x350/clothing_sp17_1.jpg" data-original="upload/images/product/350x350/clothing_sp17_1.jpg" alt="Drape Back Playsuit " height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#182" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#182" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 19px;" class="product-name"><a href="#" title="Drape Back Playsuit ">Drape Back Playsuit </a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:100%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(1)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">

                                                                                                                    <p class="old-price">
                                                                                                                        <span class="price-label">Regular Price:</span>
                                                                                                                        <span class="price" id="old-price-182-emprice-e28d8be0787e9d8ae65c6afe74f8df0a">$70.00</span>
                                                                                                                    </p>

                                                                                                                    <p class="special-price">
                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                        <span class="price" content="60" id="product-price-182-emprice-e28d8be0787e9d8ae65c6afe74f8df0a">$60.00</span>
                                                                                                                    </p>


                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- item -->
                                                                                            </div><!-- /.products-grid -->
                                                                                        </div><!-- /.emcatalog-desktop-4 -->
                                                                                    </div><!-- /.widget-products -->
                                                                                </div><!-- /.widget -->

                                                                            </div><!-- /#em_fashion_new_arrivals_tab01 -->
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /#tab_emtabs_1_1 -->

                                                                <div class="r-tabs-accordion-title">
                                                                    <a class="r-tabs-anchor" href="#tab_emtabs_1_2"> <span class="icon tab_emtabs_1_2"></span>Skirt</a>
                                                                </div>
                                                                <div id="tab_emtabs_1_2" class="tab-pane tab-item content_tab_emtabs_1_2 r-tabs-state-default r-tabs-panel">
                                                                    <div class="wrapper button-show01 button-hide-text em-wrapper-loaded">
                                                                        <div class="emfilter-ajaxblock-loaded">
                                                                            <div id="em_fashion_new_arrivals_tab02" class="em-grid-20 ">


                                                                                <div class="widget em-filterproducts-grid">
                                                                                    <div class="widget-products em-widget-products">
                                                                                        <div class="emcatalog-desktop-4" id="em-grid-mode-em_fashion_new_arrivals_tab02">
                                                                                            <div class="products-grid ">

                                                                                                <div class="item first" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Embellished Mirror Pastel" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp5_2.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp5_1.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#170" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#170" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title=" Embellished Mirror Pastel"> Embellished Mirror Pastel</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-170-emprice-eb1c945f5e0622c838de0ac78118c6d5">
                                                                                                                            <span class="price">$860.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Metallic Midi Cut Out Midi Dress" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp12_2.jpg" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp12_1.jpg" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#177" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#177" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title=" Metallic Midi Cut Out Midi Dress"> Metallic Midi Cut Out Midi Dress</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:67%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(1)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-177-emprice-22289a5afbf68d7dbc7750f93e5c32f3">
                                                                                                                            <span class="price">$1,200.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Pretty Playsuit" class="product-image">
                                                                                                                <!--show label product - label extension is required-->
                                                                                                                <ul class="productlabels_icons">
                                                                                                                    <li class="label special">
                                                                                                                        <p>
                                                                                                                            <span>-31%</span> </p>
                                                                                                                    </li>
                                                                                                                </ul>

                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp19_2.jpg" alt=" Pretty Playsuit" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp19_1.jpg" alt=" Pretty Playsuit" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#184" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#184" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title=" Pretty Playsuit"> Pretty Playsuit</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">

                                                                                                                    <p class="old-price">
                                                                                                                        <span class="price-label">Regular Price:</span>
                                                                                                                        <span class="price" id="old-price-184-emprice-dc0ff4c48748bf2b2c0267cb7e2d990c">$130.00</span>
                                                                                                                    </p>

                                                                                                                    <p class="special-price">
                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                        <span class="price" content="90" id="product-price-184-emprice-dc0ff4c48748bf2b2c0267cb7e2d990c">$90.00</span>
                                                                                                                    </p>


                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item last" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="A Line Skirt" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp8_2.jpg" alt="A Line Skirt" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp8_1.jpg" alt="A Line Skirt" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#173" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#173" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="A Line Skirt">A Line Skirt</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-173-emprice-4f28646392017fe90d58db017839531d">
                                                                                                                            <span class="price">$1,750.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item first" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="ASOS Jumpsuit " class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp13_2.jpg" alt="ASOS Jumpsuit " height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp13_1.jpg" alt="ASOS Jumpsuit " height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart"><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#178" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#178" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="ASOS Jumpsuit ">ASOS Jumpsuit </a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-178-emprice-9fea36fe85acb2fb2efe7caec6a4d5be">
                                                                                                                            <span class="price">$860.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="ASOS Mini Skirt" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp6_2.jpg" alt="ASOS Mini Skirt" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp6_1.jpg" alt="ASOS Mini Skirt" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#171" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#171" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="ASOS Mini Skirt">ASOS Mini Skirt</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-171-emprice-319e1329d33f39f9abcb736f1bdcd6df">
                                                                                                                            <span class="price">$900.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="Cross Back Dress" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp1_2.jpg" alt="Cross Back Dress" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp1_1.jpg" alt="Cross Back Dress" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#166" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#166" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="Cross Back Dress">Cross Back Dress</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-166-emprice-ec37a7c7026a21c9d471491df0e23895">
                                                                                                                            <span class="price">$750.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item last" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="Drape Back Playsuit " class="product-image">
                                                                                                                <!--show label product - label extension is required-->
                                                                                                                <ul class="productlabels_icons">
                                                                                                                    <li class="label hot">
                                                                                                                        <p>
                                                                                                                            Hot </p>
                                                                                                                    </li>
                                                                                                                    <li class="label special">
                                                                                                                        <p>
                                                                                                                            <span>-14%</span> </p>
                                                                                                                    </li>
                                                                                                                </ul>

                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp17_2.jpg" alt="Drape Back Playsuit " height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp17_1.jpg" alt="Drape Back Playsuit " height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#182" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#182" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop-top -->

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="Drape Back Playsuit ">Drape Back Playsuit </a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:100%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(1)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">

                                                                                                                    <p class="old-price">
                                                                                                                        <span class="price-label">Regular Price:</span>
                                                                                                                        <span class="price" id="old-price-182-emprice-c095817cdda4bcb80055091211aacad7">$70.00</span>
                                                                                                                    </p>

                                                                                                                    <p class="special-price">
                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                        <span class="price" content="60" id="product-price-182-emprice-c095817cdda4bcb80055091211aacad7">$60.00</span>
                                                                                                                    </p>


                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div><!-- /.product-shop -->
                                                                                                    </div>
                                                                                                </div><!-- /.item -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- /.widget -->

                                                                            </div><!-- /#em_fashion_new_arrivals_tab02 -->
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /#tab_emtabs_1_2 -->

                                                                <div class="r-tabs-accordion-title">
                                                                    <a class="r-tabs-anchor" href="#tab_emtabs_1_3"> <span class="icon tab_emtabs_1_3"></span>Dresses</a>
                                                                </div>
                                                                <div id="tab_emtabs_1_3" class="tab-pane tab-item content_tab_emtabs_1_3 r-tabs-state-default r-tabs-panel">
                                                                    <div class="wrapper button-show01 button-hide-text em-wrapper-loaded">
                                                                        <div class="emfilter-ajaxblock-loaded">
                                                                            <div id="em_fashion_new_arrivals_tab03" class="em-grid-20 ">


                                                                                <div class="widget em-filterproducts-grid">
                                                                                    <div class="widget-products em-widget-products">
                                                                                        <div class="emcatalog-desktop-4" id="em-grid-mode-em_fashion_new_arrivals_tab03">
                                                                                            <div class="products-grid ">

                                                                                                <div class="item first" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Embellished Mirror Pastel" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp5_2.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp5_1.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#170" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#170" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title=" Embellished Mirror Pastel"> Embellished Mirror Pastel</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-170-emprice-286cee5e9b842b2fa93ac8f2843286c6">
                                                                                                                            <span class="price">$860.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Metallic Midi Cut Out Midi Dress" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp12_2.jpg" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp12_1.jpg" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#177" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#177" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title=" Metallic Midi Cut Out Midi Dress"> Metallic Midi Cut Out Midi Dress</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:67%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(1)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-177-emprice-61bbd2aa75dec771d98c3abf85809a6d">
                                                                                                                            <span class="price">$1,200.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Pretty Playsuit" class="product-image">
                                                                                                                <!--show label product - label extension is required-->
                                                                                                                <ul class="productlabels_icons">
                                                                                                                    <li class="label special">
                                                                                                                        <p>
                                                                                                                            <span>-31%</span> </p>
                                                                                                                    </li>
                                                                                                                </ul>

                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp19_2.jpg" alt=" Pretty Playsuit" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp19_1.jpg" alt=" Pretty Playsuit" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#184" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#184" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title=" Pretty Playsuit"> Pretty Playsuit</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">

                                                                                                                    <p class="old-price">
                                                                                                                        <span class="price-label">Regular Price:</span>
                                                                                                                        <span class="price" id="old-price-184-emprice-bed0ba3e1520d6a5267da76185c172c7">$130.00</span>
                                                                                                                    </p>

                                                                                                                    <p class="special-price">
                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                        <span class="price" content="90" id="product-price-184-emprice-bed0ba3e1520d6a5267da76185c172c7">$90.00</span>
                                                                                                                    </p>


                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item last" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="A Line Skirt" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp8_2.jpg" alt="A Line Skirt" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp8_1.jpg" alt="A Line Skirt" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#173" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#173" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="A Line Skirt">A Line Skirt</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-173-emprice-d3011a3f6575426fe5ffe87905f56cfe">
                                                                                                                            <span class="price">$1,750.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item first" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="ASOS Jumpsuit " class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp13_2.jpg" alt="ASOS Jumpsuit " height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp13_1.jpg" alt="ASOS Jumpsuit " height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#178" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#178" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="ASOS Jumpsuit ">ASOS Jumpsuit </a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-178-emprice-7f2f82cb85201d49e8810115cd26c1a5">
                                                                                                                            <span class="price">$860.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="ASOS Mini Skirt" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp6_2.jpg" alt="ASOS Mini Skirt" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp6_1.jpg" alt="ASOS Mini Skirt" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#171" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#171" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="ASOS Mini Skirt">ASOS Mini Skirt</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-171-emprice-b8ad0fea2a69792e83bbd302b6c5b8dc">
                                                                                                                            <span class="price">$900.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="Cross Back Dress" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp1_2.jpg" alt="Cross Back Dress" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp1_1.jpg" alt="Cross Back Dress" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#166" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#166" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="Cross Back Dress">Cross Back Dress</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-166-emprice-f3cbb26c353ac413d32857dade4cad18">
                                                                                                                            <span class="price">$750.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item last" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="Drape Back Playsuit " class="product-image">
                                                                                                                <!--show label product - label extension is required-->
                                                                                                                <ul class="productlabels_icons">
                                                                                                                    <li class="label hot">
                                                                                                                        <p>
                                                                                                                            Hot </p>
                                                                                                                    </li>
                                                                                                                    <li class="label special">
                                                                                                                        <p>
                                                                                                                            <span>-14%</span> </p>
                                                                                                                    </li>
                                                                                                                </ul>

                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp17_2.jpg" alt="Drape Back Playsuit " height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp17_1.jpg" alt="Drape Back Playsuit " height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#182" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#182" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="Drape Back Playsuit ">Drape Back Playsuit </a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:100%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(1)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">

                                                                                                                    <p class="old-price">
                                                                                                                        <span class="price-label">Regular Price:</span>
                                                                                                                        <span class="price" id="old-price-182-emprice-1cf9bc7db75928d6682f6b8a6ff12014">$70.00</span>
                                                                                                                    </p>

                                                                                                                    <p class="special-price">
                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                        <span class="price" content="60" id="product-price-182-emprice-1cf9bc7db75928d6682f6b8a6ff12014">$60.00</span>
                                                                                                                    </p>


                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->
                                                                                            </div><!-- /.products-grid -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- /.widget -->

                                                                            </div><!-- /#em_fashion_new_arrivals_tab03 -->
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /#tab_emtabs_1_3 -->

                                                                <div class="r-tabs-accordion-title">
                                                                    <a class="r-tabs-anchor" href="#tab_emtabs_1_4"> <span class="icon tab_emtabs_1_4"></span>Outerwear</a>
                                                                </div>
                                                                <div id="tab_emtabs_1_4" class="tab-pane tab-item content_tab_emtabs_1_4 r-tabs-state-default r-tabs-panel">
                                                                    <div class="wrapper button-show01 button-hide-text em-wrapper-loaded">
                                                                        <div class="emfilter-ajaxblock-loaded">
                                                                            <div id="em_fashion_new_arrivals_tab04" class="em-grid-20 ">


                                                                                <div class="widget em-filterproducts-grid">
                                                                                    <div class="widget-products em-widget-products">
                                                                                        <div class="emcatalog-desktop-4" id="em-grid-mode-em_fashion_new_arrivals_tab04">
                                                                                            <div class="products-grid ">

                                                                                                <div class="item first" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Embellished Mirror Pastel" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp5_2.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp5_1.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#170" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#170" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title=" Embellished Mirror Pastel"> Embellished Mirror Pastel</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-170-emprice-5da71d3452401c01e1e983e71aa357b7">
                                                                                                                            <span class="price">$860.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Metallic Midi Cut Out Midi Dress" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp12_2.jpg" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp12_1.jpg" alt=" Metallic Midi Cut Out Midi Dress" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#177" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#177" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title=" Metallic Midi Cut Out Midi Dress"> Metallic Midi Cut Out Midi Dress</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:67%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#">(1)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-177-emprice-a5a723ac1b151832bea1d8b9e4458910">
                                                                                                                            <span class="price">$1,200.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title=" Pretty Playsuit" class="product-image">
                                                                                                                <!--show label product - label extension is required-->
                                                                                                                <ul class="productlabels_icons">
                                                                                                                    <li class="label special">
                                                                                                                        <p>
                                                                                                                            <span>-31%</span> </p>
                                                                                                                    </li>
                                                                                                                </ul>

                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp19_2.jpg" alt=" Pretty Playsuit" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp19_1.jpg" alt=" Pretty Playsuit" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#184" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#184" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title=" Pretty Playsuit"> Pretty Playsuit</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">

                                                                                                                    <p class="old-price">
                                                                                                                        <span class="price-label">Regular Price:</span>
                                                                                                                        <span class="price" id="old-price-184-emprice-d0bb458fddeb22265f0d19b369db3c9f">$130.00</span>
                                                                                                                    </p>

                                                                                                                    <p class="special-price">
                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                        <span class="price" content="90" id="product-price-184-emprice-d0bb458fddeb22265f0d19b369db3c9f">$90.00</span>
                                                                                                                    </p>


                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item last" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="A Line Skirt" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp8_2.jpg" alt="A Line Skirt" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp8_1.jpg" alt="A Line Skirt" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#173" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#173" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="A Line Skirt">A Line Skirt</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:0%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-173-emprice-d7d22be859fd51d9b70258b3ad70ba04">
                                                                                                                            <span class="price">$1,750.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item first" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="ASOS Jumpsuit " class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp13_2.jpg" alt="ASOS Jumpsuit " height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp13_1.jpg" alt="ASOS Jumpsuit " height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#178" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#178" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="ASOS Jumpsuit ">ASOS Jumpsuit </a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-178-emprice-60b9348e249c145e4e5b1664dcee2b47">
                                                                                                                            <span class="price">$860.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="ASOS Mini Skirt" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp6_2.jpg" alt="ASOS Mini Skirt" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp6_1.jpg" alt="ASOS Mini Skirt" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#171" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#171" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="ASOS Mini Skirt">ASOS Mini Skirt</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-171-emprice-eda3dbfdc3d27408e202cf4330789ce4">
                                                                                                                            <span class="price">$900.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="Cross Back Dress" class="product-image">
                                                                                                                <!--show label product - label extension is required-->


                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp1_2.jpg" alt="Cross Back Dress" height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp1_1.jpg" alt="Cross Back Dress" height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#166" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#166" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="Cross Back Dress">Cross Back Dress</a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style=""></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(0)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">
                                                                                                                    <span class="regular-price" id="product-price-166-emprice-5e13ed0199d91a28b0900215c602f576">
                                                                                                                            <span class="price">$750.00</span> </span>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->

                                                                                                <div class="item last" style="  ">
                                                                                                    <div class="product-item">
                                                                                                        <div class="product-shop-top">
                                                                                                            <a href="#" title="Drape Back Playsuit " class="product-image">
                                                                                                                <!--show label product - label extension is required-->
                                                                                                                <ul class="productlabels_icons">
                                                                                                                    <li class="label hot">
                                                                                                                        <p>
                                                                                                                            Hot </p>
                                                                                                                    </li>
                                                                                                                    <li class="label special">
                                                                                                                        <p>
                                                                                                                            <span>-14%</span> </p>
                                                                                                                    </li>
                                                                                                                </ul>

                                                                                                                <img class="em-alt-hover img-responsive em-img-lazy" src="upload/images/product/350x350/clothing_sp17_2.jpg" alt="Drape Back Playsuit " height="350" width="350">
                                                                                                                <img class="img-responsive em-img-lazy em-alt-org" src="upload/images/product/350x350/clothing_sp17_1.jpg" alt="Drape Back Playsuit " height="350" width="350">
                                                                                                            </a>
                                                                                                            <div class="em-element-display-hover bottom">
                                                                                                                <div class="em-btn-addto">
                                                                                                                    <!--product add to cart-->
                                                                                                                    <button type="button" title="Add to Cart" class="button btn-cart" ><span><span>Add to Cart</span></span>
                                                                                                                    </button>
                                                                                                                    <!--product add to compare-wishlist-->
                                                                                                                    <ul class="add-to-links">
                                                                                                                        <li><a onclick="" href="#182" class="link-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                                                                                                        </li>
                                                                                                                        <li><span class="separator">|</span> <a href="#182" class="link-compare" title="Add to Compare">Add to Compare</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="quickshop-link-container">
                                                                                                                    <a href="#" class="quickshop-link" title="Quickshop">Quickshop</a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="product-shop">
                                                                                                            <div class="f-fix">
                                                                                                                <!--product name-->
                                                                                                                <h3 style="min-height: 0px;" class="product-name"><a href="#" title="Drape Back Playsuit ">Drape Back Playsuit </a></h3>
                                                                                                                <!--product description-->
                                                                                                                <!--product reviews-->
                                                                                                                <div class="ratings">
                                                                                                                    <div class="rating-box">
                                                                                                                        <div class="rating" style="width:100%"></div>
                                                                                                                    </div>
                                                                                                                    <span class="amount"><a href="#" >(1)</a></span>
                                                                                                                </div>
                                                                                                                <!--product price-->



                                                                                                                <div class="price-box">

                                                                                                                    <p class="old-price">
                                                                                                                        <span class="price-label">Regular Price:</span>
                                                                                                                        <span class="price" id="old-price-182-emprice-6cd67a43b83c74f1b40e2ad0cbe2ba74">$70.00</span>
                                                                                                                    </p>

                                                                                                                    <p class="special-price">
                                                                                                                        <span class="price-label">Special Price</span>
                                                                                                                        <span class="price" content="60" id="product-price-182-emprice-6cd67a43b83c74f1b40e2ad0cbe2ba74">$60.00</span>
                                                                                                                    </p>


                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div><!-- /.item -->
                                                                                            </div><!-- /.products-grid -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- /.widget -->

                                                                            </div><!-- /#em_fashion_new_arrivals_tab04 -->
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /#tab_emtabs_1_4 -->
                                                            </div><!-- /.tab-content -->
                                                        </div><!-- /#emtabs_1 -->
                                                    </div>
                                                </div>
                                            </div><!-- /.em-new-arrivals-tabs -->
                                        </div><!-- /.em-wrapper-new-arrivals-tabs -->

                                        <div class="em-wrapper-banners hidden-xs">
                                            <div class="em-effect06">
                                                <a class="em-eff06-03" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_10.jpg" /> </a>
                                            </div>
                                        </div><!-- /.em-wrapper-banners -->

                                        <div class="em-best-sales em-wrapper-product-15">
                                            <div class="emfilter-ajaxblock-loaded">
                                                <div class="em-grid-15 custom-product-list">
                                                    <div class="widget-title em-widget-title">
                                                        <h3><span>Best Sales</span></h3>
                                                    </div>

                                                    <div class="widget em-filterproducts-list">
                                                        <div class="widget-products em-widget-products">
                                                            <div class="products-list ">
                                                                <div class="item first" style="  ">
                                                                    <a href="#" title=" Pretty Playsuit" class="product-image">

                                                                        <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/110x110/clothing_sp19_2.jpg" data-original="upload/images/product/110x110/clothing_sp19_2.jpg" alt=" Pretty Playsuit" height="110" width="110">
                                                                        <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/110x110/clothing_sp19_1.jpg" data-original="upload/images/product/110x110/clothing_sp19_1.jpg" alt=" Pretty Playsuit" height="110" width="110">
                                                                    </a>
                                                                    <div class="product-shop">
                                                                        <div class="f-fix">
                                                                            <!--product name-->
                                                                            <h3 class="product-name"><a href="#" title=" Pretty Playsuit"> Pretty Playsuit</a></h3>
                                                                            <!--product description-->
                                                                            <!--product reviews-->
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:0%"></div>
                                                                                </div>
                                                                                <span class="amount"><a href="#" onclick="184">(0)</a></span>
                                                                            </div>
                                                                            <!--product price-->
                                                                            <div class="price-box">

                                                                                <p class="old-price">
                                                                                    <span class="price-label">Regular Price:</span>
                                                                                    <span class="price" id="old-price-184-emprice-9c7acb644d253ae8c0c656d97ce7a00f">$130.00</span>
                                                                                </p>

                                                                                <p class="special-price">
                                                                                    <span class="price-label">Special Price</span>
                                                                                    <span class="price" content="90" id="product-price-184-emprice-9c7acb644d253ae8c0c656d97ce7a00f"> $90.00</span>
                                                                                </p>


                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.item -->
                                                                <div class="item" style="  ">
                                                                    <a href="#" title="Cross Back Dress" class="product-image">


                                                                        <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/110x110/clothing_sp1_2.jpg" data-original="upload/images/product/110x110/clothing_sp1_2.jpg" alt="Cross Back Dress" height="110" width="110">
                                                                        <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/110x110/clothing_sp1_1.jpg" data-original="upload/images/product/110x110/clothing_sp1_1.jpg" alt="Cross Back Dress" height="110" width="110">
                                                                    </a>
                                                                    <div class="product-shop">
                                                                        <div class="f-fix">
                                                                            <!--product name-->
                                                                            <h3 class="product-name"><a href="#" title="Cross Back Dress">Cross Back Dress</a></h3>
                                                                            <!--product description-->
                                                                            <!--product reviews-->
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style=""></div>
                                                                                </div>
                                                                                <span class="amount"><a href="#" onclick="166">(0)</a></span>
                                                                            </div>
                                                                            <!--product price-->



                                                                            <div class="price-box">
                                                                                <span class="regular-price" id="product-price-166-emprice-420d7edd38e60d3ae400966629e226d2">
                                                                                                                        <span class="price">$750.00</span> </span>

                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.item -->
                                                                <div class="item last" style="  ">
                                                                    <a href="#" title="Drape Back Playsuit " class="product-image">


                                                                        <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/110x110/clothing_sp17_2.jpg" data-original="upload/images/product/110x110/clothing_sp17_2.jpg" alt="Drape Back Playsuit " height="110" width="110">
                                                                        <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/110x110/clothing_sp17_1.jpg" data-original="upload/images/product/110x110/clothing_sp17_1.jpg" alt="Drape Back Playsuit " height="110" width="110">
                                                                    </a>
                                                                    <div class="product-shop">
                                                                        <div class="f-fix">
                                                                            <!--product name-->
                                                                            <h3 class="product-name"><a href="#" title="Drape Back Playsuit ">Drape Back Playsuit </a></h3>
                                                                            <!--product description-->
                                                                            <!--product reviews-->
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style="width:100%"></div>
                                                                                </div>
                                                                                <span class="amount"><a href="#" onclick="182">(1)</a></span>
                                                                            </div>
                                                                            <!--product price-->



                                                                            <div class="price-box">

                                                                                <p class="old-price">
                                                                                    <span class="price-label">Regular Price:</span>
                                                                                    <span class="price" id="old-price-182-emprice-b0a1e32195ca82a58e889da04d6711df">$70.00</span>
                                                                                </p>

                                                                                <p class="special-price">
                                                                                    <span class="price-label">Special Price</span>
                                                                                    <span class="price" content="60" id="product-price-182-emprice-b0a1e32195ca82a58e889da04d6711df">$60.00</span>
                                                                                </p>


                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.item -->
                                                            </div><!-- /.products-list -->
                                                            <div class="products-list ">
                                                                <div class="item first" style="  ">
                                                                    <a href="#" title="Embellished Playsuit" class="product-image">
                                                                        <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/110x110/clothing_sp18_2.jpg" data-original="upload/images/product/110x110/clothing_sp18_2.jpg" alt="Embellished Playsuit" height="110" width="110">
                                                                        <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/110x110/clothing_sp18_1.jpg" data-original="upload/images/product/110x110/clothing_sp18_1.jpg" alt="Embellished Playsuit" height="110" width="110">
                                                                    </a>
                                                                    <div class="product-shop">
                                                                        <div class="f-fix">
                                                                            <!--product name-->
                                                                            <h3 class="product-name"><a href="#" title="Embellished Playsuit">Embellished Playsuit</a></h3>
                                                                            <!--product description-->
                                                                            <!--product reviews-->
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style=""></div>
                                                                                </div>
                                                                                <span class="amount"><a href="#" onclick="183">(0)</a></span>
                                                                            </div>
                                                                            <!--product price-->
                                                                            <div class="price-box">

                                                                                <p class="old-price">
                                                                                    <span class="price-label">Regular Price:</span>
                                                                                    <span class="price" id="old-price-183-emprice-447f1b9a2238137e1de786f67b42bb85">$150.00</span>
                                                                                </p>

                                                                                <p class="special-price">
                                                                                    <span class="price-label">Special Price</span>
                                                                                    <span class="price" content="80" id="product-price-183-emprice-447f1b9a2238137e1de786f67b42bb85">$80.00</span>
                                                                                </p>


                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.item -->
                                                                <div class="item" style="  ">
                                                                    <a href="#" title="Geometric Dress" class="product-image">
                                                                        <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/110x110/clothing_sp20_2.jpg" data-original="upload/images/product/110x110/clothing_sp20_2.jpg" alt="Geometric Dress" height="110" width="110">
                                                                        <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/110x110/clothing_sp20_1.jpg" data-original="upload/images/product/110x110/clothing_sp20_1.jpg" alt="Geometric Dress" height="110" width="110">
                                                                    </a>
                                                                    <div class="product-shop">
                                                                        <div class="f-fix">
                                                                            <!--product name-->
                                                                            <h3 class="product-name"><a href="#" title="Geometric Dress">Geometric Dress</a></h3>
                                                                            <!--product description-->
                                                                            <!--product reviews-->
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style=""></div>
                                                                                </div>
                                                                                <span class="amount"><a href="#" onclick="185">(0)</a></span>
                                                                            </div>
                                                                            <!--product price-->
                                                                            <div class="price-box">

                                                                                <p class="old-price">
                                                                                    <span class="price-label">Regular Price:</span>
                                                                                    <span class="price" id="old-price-185-emprice-b9cbb909aac3b0c33ee82836547d5755">$120.00</span>
                                                                                </p>

                                                                                <p class="special-price">
                                                                                    <span class="price-label">Special Price</span>
                                                                                    <span class="price" content="100" id="product-price-185-emprice-b9cbb909aac3b0c33ee82836547d5755">$100.00</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.item -->
                                                                <div class="item last" style="  ">
                                                                    <a href="#" title="Mono Scallop" class="product-image">
                                                                        <img style="" class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/110x110/clothing_sp16_2.jpg" data-original="upload/images/product/110x110/clothing_sp16_2.jpg" alt="Mono Scallop" height="110" width="110">
                                                                        <img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/110x110/clothing_sp16_1.jpg" data-original="upload/images/product/110x110/clothing_sp16_1.jpg" alt="Mono Scallop" height="110" width="110">
                                                                    </a>
                                                                    <div class="product-shop">
                                                                        <div class="f-fix">
                                                                            <!--product name-->
                                                                            <h3 class="product-name"><a href="#" title="Mono Scallop">Mono Scallop</a></h3>
                                                                            <!--product description-->
                                                                            <!--product reviews-->
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div class="rating" style=""></div>
                                                                                </div>
                                                                                <span class="amount"><a href="#" onclick="181">(0)</a></span>
                                                                            </div>
                                                                            <!--product price-->
                                                                            <div class="price-box">

                                                                                <p class="old-price">
                                                                                    <span class="price-label">Regular Price:</span>
                                                                                    <span class="price" id="old-price-181-emprice-f425d011393677da16e76f16bed41113">$175.00</span>
                                                                                </p>

                                                                                <p class="special-price">
                                                                                    <span class="price-label">Special Price</span>
                                                                                    <span class="price" content="75" id="product-price-181-emprice-f425d011393677da16e76f16bed41113">$75.00</span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.item -->
                                                            </div><!-- /.products-list -->
                                                        </div>
                                                    </div><!-- /.widget -->

                                                </div><!-- /.em-grid-15 -->
                                            </div>
                                        </div><!-- /.em-best-sales -->
                                    </div><!-- /.em-col-main -->
                                    
                                    <div class="col-sm-6 col-sm-pull-18 em-col-left em-sidebar">
                                        <?=  MenuLeftWidget::widget() ?>
                                        <!-- /.em-wrapper-area02 -->
                                        <div class="em-wrapper-banners hidden-xs">
                                            <div class="em-effect06">
                                                <a class="em-eff06-04" href="#"><img class="img-responsive retina-img" alt="em_ads_01.jpg" src="upload/images/wysiwyg/em_ads_01.jpg" />
                                                </a>
                                            </div>
                                        </div><!--  /.em-wrapper-banners -->
                                        <div class="row">
                                            <div class="col-sm-24">
                                                <div class="em-wrapper-ads-15">
                                                    <div class="em-slider em-slider-category" data-emslider-pagination="true" data-emslider-items="1">
                                                        <div class="em-ads-item">
                                                            <div class="em-ads-img">
                                                                <a href="#"><img class="img-responsive" alt="em_ads_02.png" src="upload/images/wysiwyg/em_ads_02.png" />
                                                                </a>
                                                            </div>
                                                            <div class="em-ads-content">
                                                                <p class="em-ads-des"><i class="fa fa-fw"></i>You can change the visual appearance of almost every element of the theme.</p>
                                                                <p class="em-ads-author"><span class="em-text-upercase">elena gilbert </span><span>- Web designer</span>
                                                                </p>
                                                            </div>
                                                        </div><!-- /.em-ads-item -->
                                                        <div class="em-ads-item">
                                                            <div class="em-ads-img">
                                                                <a href="#"><img class="img-responsive" alt="em_ads_02.png" src="upload/images/wysiwyg/em_ads_02.png" />
                                                                </a>
                                                            </div>
                                                            <div class="em-ads-content">
                                                                <p class="em-ads-des"><i class="fa fa-fw"></i>You can change the visual appearance of almost every element of the theme.</p>
                                                                <p class="em-ads-author"><span class="em-text-upercase">elena gilbert </span><span>- Web designer</span>
                                                                </p>
                                                            </div>
                                                        </div><!-- /.em-ads-item -->
                                                        <div class="em-ads-item">
                                                            <div class="em-ads-img">
                                                                <a href="#"><img class="img-responsive" alt="em_ads_02.png" src="upload/images/wysiwyg/em_ads_02.png" />
                                                                </a>
                                                            </div>
                                                            <div class="em-ads-content">
                                                                <p class="em-ads-des"><i class="fa fa-fw"></i>You can change the visual appearance of almost every element of the theme.</p>
                                                                <p class="em-ads-author"><span class="em-text-upercase">elena gilbert </span><span>- Web designer</span>
                                                                </p>
                                                            </div>
                                                        </div><!-- /.em-ads-item -->
                                                    </div><!-- /.em-slider -->
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                        <div class="row">
                                            <div class="col-sm-24">
                                                <div class="em-wrapper-ads-10 em-line-01">
                                                    <div class="em-block-title">
                                                        <h2><span>Blog</span></h2>
                                                    </div>
                                                    <div class="em-blog-style01">
                                                        <div class="em-from-our-blog">
                                                            <div class="em-blog-item em-effect-13">
                                                                <div class="em-blog-content bkg-top">
                                                                    <a title="em-sample-title" class="img-banner-small" href="#"> <img alt="em_blog" class="img-responsive" src="upload/images/blog/em_ads_07_1.jpg" /> </a>
                                                                    <div class="em-blog-time">
                                                                        <p class="em-blog-date">21</p>
                                                                        <p class="em-blog-month">Jul</p>
                                                                    </div>
                                                                    <div class="hov">&nbsp;</div>
                                                                </div>
                                                                <div class="em-box bkg-bottom">
                                                                    <h4 class="em-blog-title"><a href="#">Pineapples, Mermaids and&hellip;</a></h4>
                                                                    <p class="em-blog-des">Boutique festival Secret Garden went down in Sydney&rsquo;s&nbsp;Camden over the weekend,&hellip;</p>
                                                                    <p><a class="link-more" href="#">Read more</a>
                                                                    </p>
                                                                </div>
                                                            </div><!-- /.em-blog-item -->
                                                            <div class="em-blog-item em-effect-13">
                                                                <div class="em-blog-content bkg-top">
                                                                    <a title="em-sample-title" class="img-banner-small" href="http://demo.emthemes.com/everything/index.php/blog/11-emerging-jewelry-designers-you-need-to-know.html"> <img alt="em_blog" class="img-responsive" src="upload/images/blog/em_ads_08.jpg" /> </a>
                                                                    <div class="em-blog-time">
                                                                        <p class="em-blog-date">21</p>
                                                                        <p class="em-blog-month">Jul</p>
                                                                    </div>
                                                                    <div class="hov">&nbsp;</div>
                                                                </div>
                                                                <div class="em-box bkg-bottom">
                                                                    <h4 class="em-blog-title"><a href="http://demo.emthemes.com/everything/index.php/blog/11-emerging-jewelry-designers-you-need-to-know.html">11 Emerging Jewelry&hellip;</a></h4>
                                                                    <p class="em-blog-des">Jewelry&nbsp;designers are a little like the stepchild of the fashion industry.&hellip;</p>
                                                                    <p><a class="link-more" href="http://demo.emthemes.com/everything/index.php/blog/11-emerging-jewelry-designers-you-need-to-know.html">Read more</a>
                                                                    </p>
                                                                </div>
                                                            </div><!-- /.em-blog-item -->
                                                        </div>
                                                    </div><!-- /.em-blog-style01 -->
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                        <div class="img-banner hidden-xs">
                                            <div class="effect-hover-text2">
                                                <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_05.jpg" /> </a>
                                                <a class="banner-text" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_text_05.png" /> </a>
                                            </div>
                                        </div><!-- /.img-banner -->
                                    </div><!-- /.em-sidebar -->
                                </div>
                            </div><!-- /.em-main-container -->

                            <div class="em-wrapper-area04">
                                <div class="row hidden-xs">
                                    <div class="em-wrapper-banners">
                                        <div class="col-sm-6 first img-banner text-center">
                                            <div class="effect-hover-text">
                                                <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_11.jpg" /> </a>
                                                <a class="banner-text" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_text_07.png" /> </a>
                                            </div>
                                        </div><!-- /.img-banner -->
                                        <div class="col-sm-12  img-banner text-center">
                                            <div class="effect-hover-text4">
                                                <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_12.jpg" /> </a>
                                                <a class="banner-text" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_text_08.png" /> </a>
                                            </div>
                                        </div><!-- /.img-banner -->
                                        <div class="col-sm-6 last img-banner text-center">
                                            <div class="effect-hover-text3">
                                                <a class="banner-img" title="em-sample-title" href="#"> <img class="img-responsive retina-img" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_13.jpg" /> </a>
                                                <a class="banner-text" title="em-sample-title" href="#"> <img class="img-responsive" alt="em-sample-alt" src="upload/images/wysiwyg/em_ads_text_09.png" /> </a>
                                            </div>
                                        </div><!-- /.img-banner -->
                                    </div>
                                </div>
                            </div><!-- /.em-wrapper-area04 -->

                            <div class="em-wrapper-area05">
                                <div class="em-wrapper-ads-09">
                                    <div class="row">
                                        <div class="col-sm-6 text-center em-wrapper-ads-item">
                                            <div class="em-ads-item">
                                                <p><em class="fa fa-fw"></em>
                                                </p>
                                                <div class="em-ads-content">
                                                    <h4 class="primary em-text-upercase">SUPER ONLINE STORES</h4>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                                </div>
                                            </div>
                                        </div><!-- /.em-wrapper-ads-item -->
                                        <div class="col-sm-6 text-center em-wrapper-ads-item  line-left line-right">
                                            <div class="em-ads-item">
                                                <p><em class="fa fa-fw"></em>
                                                </p>
                                                <div class="em-ads-content">
                                                    <h4 class="primary em-text-upercase">RESPONSIVaE DESIGN</h4>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                                </div>
                                            </div>
                                        </div><!-- /.em-wrapper-ads-item -->
                                        <div class="col-sm-6 text-center  em-wrapper-ads-item  line-left line-right">
                                            <div class="em-ads-item">
                                                <p><em class="fa fa-fw"></em>
                                                </p>
                                                <div class="em-ads-content">
                                                    <h4 class="primary em-text-upercase">FREE UPDATES</h4>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                                </div>
                                            </div>
                                        </div><!-- /.em-wrapper-ads-item -->
                                        <div class="col-sm-6 text-center  em-wrapper-ads-item">
                                            <div class="em-ads-item">
                                                <p><em class="fa fa-fw"></em>
                                                </p>
                                                <div class="em-ads-content">
                                                    <h4 class="primary em-text-upercase">24/7 SUPPORT ONLINE</h4>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                                </div>
                                            </div>
                                        </div><!-- /.em-wrapper-ads-item -->
                                    </div>
                                </div>
                            </div><!-- /.em-wrapper-area05 -->

                            <div class="em-wrapper-area06">
                                <div class="em-wrapper-brands">
                                    <div class=" slider-style02">
                                        <div class="em-slider em-slider-banners em-slider-navigation-icon" data-emslider-navigation="true" data-emslider-items="6" data-emslider-desktop="5" data-emslider-desktop-small="4" data-emslider-tablet="3" data-emslider-mobile="2">
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_01.jpg" src="upload/images/brand/em_brand_01.png" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_02.jpg" src="upload/images/brand/em_brand_02.png" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_03.jpg" src="upload/images/brand/em_brand_03.png" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_04.jpg" src="upload/images/brand/em_brand_04.png" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_05.jpg" src="upload/images/brand/em_brand_05.png" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_06.jpg" src="upload/images/brand/em_brand_06.png" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_07.jpg" src="upload/images/brand/em_brand_01.png" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_01.jpg" src="upload/images/brand/em_brand_02.png" />
                                                </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="em_brand_02.jpg" src="upload/images/brand/em_brand_03.png" />
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- /.slider-style02 -->
                                </div>
                            </div><!-- /.em-wrapper-area06 -->

                        </div><!-- /.em-inner-main -->
                    </div><!-- /.container -->
                </div><!-- /.em-wrapper-main -->

                <div class="em-wrapper-footer">
                    <div class="em-footer-style09">
                        <div class="em-footer-top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-24">
                                        <div class="em-footer-info">
                                            <div class="row">
                                                <div class="col-sm-4 first text-center">
                                                    <div class="em-block-title" data-collapse-target="#collapse01">
                                                        <p class="h4 em-text-upercase"><span>What's hot</span>
                                                        </p>
                                                    </div>
                                                    <ul id="collapse01" class="em-links em-block-content block-info">
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Discount Voucher</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Spring Collection</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Trending</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Best Sellers</span></a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.col-sm-4 -->
                                                <div class="col-sm-4 text-center">
                                                    <div class="em-block-title" data-collapse-target="#collapse02">
                                                        <p class="h4 em-text-upercase"><span>Brands</span>
                                                        </p>
                                                    </div>
                                                    <ul id="collapse02" class="em-links em-block-content block-info">
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Jack &amp; Jones</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Calvin Klein</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Ray Ban</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>River Island</span></a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.col-sm-4 -->
                                                <div class="col-sm-4 text-center">
                                                    <div class="em-block-title" data-collapse-target="#collapse03">
                                                        <p class="h4 em-text-upercase"><span>Men shop</span>
                                                        </p>
                                                    </div>
                                                    <ul id="collapse03" class="em-links em-block-content block-info">
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Top</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Bottoms</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Accessories</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Shoes</span></a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.col-sm-4 -->
                                                <div class="col-sm-4 text-center">
                                                    <div class="em-block-title" data-collapse-target="#collapse04">
                                                        <p class="h4 em-text-upercase"><span>Women shop</span>
                                                        </p>
                                                    </div>
                                                    <ul id="collapse04" class="em-links em-block-content block-info">
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Jeans</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Dresses</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Other</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Shoes</span></a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.col-sm-4 -->
                                                <div class="col-sm-4 text-center">
                                                    <div class="em-block-title" data-collapse-target="#collapse05">
                                                        <p class="h4 em-text-upercase"><span>Help</span>
                                                        </p>
                                                    </div>
                                                    <ul id="collapse05" class="em-links em-block-content block-info">
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>F.A.Q.</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Shipping</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="http://demo.emthemes.com/everything/index.php/contacts"><span>Contact Us</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Privacy Policy</span></a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.col-sm-4 -->
                                                <div class="col-sm-4 last text-center">
                                                    <div class="em-block-title" data-collapse-target="#collapse06">
                                                        <p class="h4 em-text-upercase"><span>Nation Apps</span>
                                                        </p>
                                                    </div>
                                                    <ul id="collapse06" class="em-links em-block-content block-info">
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>iPhone</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>iPad</span></a>
                                                        </li>
                                                        <li class="em-links-item"><a title="em-sample-title" href="#"><span>Android</span></a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.col-sm-4 -->
                                            </div><!-- /.row -->
                                            <div class="em-footer-info-bottom">
                                                <div class="row">
                                                    <div class="col-sm-15 first">
                                                        <div class="em-wrapper-newsletter">
                                                            <div class="em-block-title" data-collapse-target="#collapse07">
                                                                <p class="h4 em-text-upercase"><span>Sign Up For Newsletter</span>
                                                                </p>
                                                            </div>
                                                            <div id="collapse07" class="em-block-content em-newsletter">
                                                                <div class="em-newsletter-style05">
                                                                    <div class="block block-subscribe">
                                                                        <form method="post" id="em-newsletter-validate-detail-style03">
                                                                            <div class="block-content">
                                                                                <div class="form-subscribe-content">
                                                                                    <div class="input-box">
                                                                                        <input type="text" name="email" id="em-newsletter-style03" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Sign up for your email ..." />
                                                                                    </div>
                                                                                    <div class="actions">
                                                                                        <button type="submit" title="Subscribe" class="button"><span><span>Subscribe</span></span>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div><!-- /#collapse07 -->
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9 last">
                                                        <div class="em-wrapper-social f-right">
                                                            <div class="em-block-title" data-collapse-target="#collapse08">
                                                                <p class="h4 em-text-upercase"><span>Follow Us</span>
                                                                </p>
                                                            </div>
                                                            <div id="collapse08" class="em-block-content">
                                                                <p class="em-social"><a class="em-social-icon em-facebook f-left" title="em-sample-title" href="#"><span class="fa fa-fw"></span></a> <a class="em-social-icon em-twitter f-left" title="em-sample-title" href="#"><span class="fa fa-fw"></span></a> <a class="em-social-icon em-pinterest  f-left" title="em-sample-title" href="#"><span class="fa fa-fw"></span></a> <a class="em-social-icon em-google f-left" title="em-sample-title" href="#"><span class="fa fa-fw"></span></a> <a class="em-social-icon em-rss  f-left" title="em-sample-title" href="#"><span class="fa fa-fw"></span></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.em-footer-info-bottom -->
                                        </div><!-- /.em-footer-info -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.em-footer-top -->
                        <div class="em-footer-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-24">
                                        <div class="em-area-footer02">
                                            <div class="em-payment f-right"><a class="em-payment-icon em-visa" title="em-sample-title" href="#">visa</a> <a class="em-payment-icon em-master" title="em-sample-title" href="#">master</a> <a class="em-payment-icon em-express " title="em-sample-title" href="#">express</a><a class="em-payment-icon em-paypal" title="em-sample-title" href="#">paypal</a> <a class="em-payment-icon em-other " title="em-sample-title" href="#">other</a>
                                            </div>
                                        </div>
                                        <div class="em-footer-address"> <address class="f-left">&copy; 2015 EM0131 Everything Demo Store. All Rights Reserved.<span>HTML Templates by <a href="#" title="Responsive HTML Themes &amp; Responsive HTML Templates">htmlcooker.com</a></span></address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.em-footer-bottom -->
                    </div><!-- /.em-footer-style09 -->
                </div><!-- /.em-wrapper-footer -->
                
                <p id="back-top" style="display: none;"><a title="Top" href="#top">Top</a></p>


                <div class="popup-content" id="em-popup" style="display: none;">
                    <div class="popup-subscribe">
                        <div class="em-wrapper-newsletter">
                            <div class="em-block-title">
                                <h2><span>newsletter</span></h2>
                            </div>
                            <p>Sign up to our email newsletter to be the first to hear about great offers and more</p>
                            <div class="em-newsletter-style05">
                                <div class="block block-subscribe">
                                    <form method="post" id="em-popup-newsletter-validate-detail">
                                        <div class="block-content">
                                            <div class="form-subscribe-content">
                                                <div class="input-box">
                                                    <input type="text" name="email" id="popup-newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Sign up for your email ..." />
                                                </div>
                                                <div class="actions">
                                                    <button type="submit" title="Subscribe" class="button"><span><span>Subscribe</span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- /.em-newsletter-style05 -->
                        </div>
                    </div>
                    <div class="popup-content-block"></div>
                </div><!-- /.popup-content -->
            </div><!-- /.page -->
        </div><!-- /.wrapper -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
