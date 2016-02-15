<?php

use yii\helpers\Url;
use yii\helpers;
use yii\widgets\ActiveForm;
?>
<link href="<?= Url::base('http') ?>/css/popup.css" rel="stylesheet">

<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <!--            <div class="currency ">
                            <div class="dropdown">
                                <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Dollar</a></li>
                                    <li><a href="#">Euro</a></li>
                                </ul>
                            </div>
                        </div>-->
<!--            <div class="language ">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        <img alt="email" src="/images/vietnam.jpg" />Việt nam

                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="/images/en.jpg" />English</a></li>
                        <li><a href="#"><img alt="email" src="/images/vietnam.jpg" />Việt nam</a></li>
                    </ul>
                </div>
            </div>-->
<!--            <a class="btn-fb-login" href="#">Login fb</a>-->
            <div class="support-link">
                <a href="#">Dịch vụ</a>
                <a href="#">Hỗ trợ</a>
                <a href="#">Hướng dẫn mua hàng</a>
            </div>
            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">

                        <?php
                        if (Yii::$app->user->isGuest == false)
                        {
                            ?>
                            <li><a title="My Account" href="/site/logout" data-method="post" data-toggle="modal" data-target="#basicModal" class="btn-login">Đăng xuất(<?php echo Yii::$app->user->identity->username ?>)</a>  </li>  

                            <?php
                        } else
                        {
                            ?>
                            <li><a title="My Account" href="#" data-toggle="modal" data-target="#basicModal" class="btn-login">Đăng nhập</a></li>
                            <li><a href="#">Đăng ký</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row top-main-header">
            <div class="col-sm-12 col-md-3"></div>
            <div class="col-sm-7 col-md-6">
                <ul class="main-header-top-link">
                    <li><a href="#">Khuyến mại</a></li>
                    <li><a href="#">Thanh toán</a></li>
                    <li><a href="#">Giao dịch</a></li>
                    <li><a href="#">Return</a></li>
                    <li><a href="#">Liên hệ: +04 123456789</a></li>
                </ul>
            </div>
            <div class="col-sm-5 col-md-3">
                <div class="header-text">
                    <i class="fa fa-info-circle"></i> Miễn phí giao hàng toàn quốc
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="index-2.html"><img class="img_logo" alt="Logo" src="/images/logo/logo-men-shop.jpg" /></a>
            </div>
            <div class="col-xs-6 col-sm-6 header-search-box">
                <form class="form-inline">
                    <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">Tất cả danh mục</option>
                            <option value="1">Thời trang nam</option>
                            <option value="2">Thời trang nữ</option>
                        </select>
                    </div>
                    <div class="form-group input-serach">
                        <input type="text"  placeholder="Nhập từ cần tìm kiếm...">
                    </div>
                    <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div class="col-sm-6 col-md-3 group-button-header">
                <div class="btn-cart" id="cart-block">
                    <a title="My cart" href="cart.html">Giỏ hàng</a>
                    <span class="notify notify-right">10</span>
                    <div class="cart-block">
                        <div class="cart-block-content">
                            <h5 class="cart-title">2 Sản phẩn trong giỏ hàng</h5>
                            <div class="cart-block-list">
                                <ul>
                                    <li class="product-info">
                                        <div class="p-left">
                                            <a href="#" class="remove_link"></a>
                                            <a href="#">
                                                <img class="img-responsive" src="/images/product/product-100x122.jpg" alt="p10">
                                            </a>
                                        </div>
                                        <div class="p-right">
                                            <p class="p-name">Donec Ac Tempus</p>
                                            <p class="p-rice">61,19 €</p>
                                            <p>Qty: 1</p>
                                        </div>
                                    </li>
                                    <li class="product-info">
                                        <div class="p-left">
                                            <a href="#" class="remove_link"></a>
                                            <a href="#">
                                                <img class="img-responsive" src="/images/product/product-s5-100x122.jpg" alt="p10">
                                            </a>
                                        </div>
                                        <div class="p-right">
                                            <p class="p-name">Donec Ac Tempus</p>
                                            <p class="p-rice">61,19 €</p>
                                            <p>Qty: 1</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="toal-cart">
                                <span>Total</span>
                                <span class="toal-price pull-right">122.38 €</span>
                            </div>
                            <div class="cart-buttons">
                                <a href="order.html" class="btn-check-out">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>       
                <?php
                if (Yii::$app->user->isGuest == false)
                {
                    ?>
                    <a title="My Account" href="/site/logout" data-method="post" data-toggle="modal" data-target="#basicModal" class=" btn-login">Đăng xuất(<?php echo Yii::$app->user->identity->username ?>)</a>  

                    <?php
                } else
                {
                    ?>
                    <a title="My Account" href="#" data-toggle="modal" data-target="#basicModal" class="popup-login btn-login">Đăng nhập</a>
                <?php } ?>

                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                    <!--                    <div class="modal-dialog">
                                            <div class="modal-content messagepop">                
                                                <button type="button" id="close_p" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <form id="login-form" class="form-horizontal" action="/index.php/site/login" method="post">
                                                    <div class="form-group field-loginform-username required">
                                                        <div class="col-lg-12" id=" messages_register">
                                                            <p style="color:red;" id="login-error" class="help-block help-block-error"></p>
                                                        </div>
                                                    </div>
                    
                                                    <input type="hidden" name="_csrf" value="X0ljdlFmMUosEVE4NgFcOSUGIDsSEWF/KQVVHRwPXSMRGgsDJAtWHA==">
                                                    <div class="form-group field-loginform-username required">
                                                        <label class="col-lg-2 control-label" for="loginform-username">Username</label>
                                                        <div class="col-lg-9"><input type="text" id="loginform-username" class="form-control" name="username" placeholder="User name"></div>
                                                        <div class="col-lg-12"><p class="help-block help-block-error"></p></div>
                                                    </div>
                                                    <div class="form-group field-loginform-password required">
                                                        <label class="col-lg-2 control-label" for="loginform-password">Password</label>
                                                        <div class="col-lg-9"><input type="password" id="loginform-password" class="form-control" name="password" placeholder="Password"></div>
                                                        <div class="col-lg-12"><p class="help-block help-block-error"></p></div>
                                                    </div>
                    
                                                    <div class="form-group field-loginform-rememberme">
                                                        <div class="checkbox">
                                                            <input type="hidden" name="LoginForm[rememberMe]" value="0">
                                                            <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
                                                            <span style="padding: 0px 0px 0px 16px;">Duy trì đăng nhập</span>                
                                                        </div>
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <div class="col-lg-offset-1 col-lg-11">
                                                            <button type="submit" id="login-button" class="btn btn-primary" name="login-button">Login</button>       
                                                            <button type="button"  class="close_popup btn btn-danger">Cance</button>
                                                        </div>
                                                    </div>
                    
                                                </form>                
                    
                                            </div>
                                        </div>-->
                    <!-- Form Module-->
                    <div class="module form-module">
                        <div class="toggle">
<!--                            <i class="fa fa-times fa-pencil"></i>-->
                            <img class="icon-menu" alt="Funky roots" src="/images/icon-close.png">

                        </div>
                        <div class="form form-login">                                                        
                            <h2>Đăng nhập </h2>
                            <?php $form = ActiveForm::begin(['action' => ['contact/create'], 'method' => 'post']); ?>
                                <div class="form-group field-loginform-username required">
                                    <input type="text" id="loginform-username" name="username" placeholder="Username"/>
                                </div>
                                <div class="form-group field-loginform-username required">
                                    <input type="password" id="loginform-password" name="password" placeholder="Password"/>
                                </div>
                                <div class="form-group field-loginform-username required">
                                    <div class="" id="messages_register">
                                        <p style="text-align: center;color:red;" id="login-error" class="help-block help-block-error"></p>
                                    </div>
                                </div>
                                <div class="form-group field-loginform-username required">
                                <div class="checkbox">
                                    <span>
                                        <input type="hidden" class="remenber-ac" name="LoginForm[rememberMe]" value="0">
                                        <input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked="">
                                    </span>

                                    <span style="padding: 0px 0px 0px 16px;">Duy trì đăng nhập</span>                
                                </div>
                                </div>
                                <button type="submit" id="login-button" class="btn btn-primary" name="login-button">Login</button>

                            <?php ActiveForm::end(); ?>    
                        </div>
                        <div class="form form-register">

                            <h2>Tạo tài khoản</h2>
                            <?php $form = ActiveForm::begin(['action' => ['contact/create'], 'method' => 'post']); ?>
                                <input type="text" placeholder="Username"/>
                                <input type="password" placeholder="Password"/>
                                <input type="email" placeholder="Email Address"/>
                                <input type="tel" placeholder="Phone Number"/>
                                <button type="submit" id="login-button" class="btn btn-primary" name="login-button">Đăng ký</button>
                            <?php ActiveForm::end(); ?>    
                        </div>
                        <div class="cta register">Đăng ký</div>
                        <div class="cta login">Đăng nhập</div>
                        <div class="cta"><a href="">Quên mật khẩu?</a></div>

                    </div>

                </div> 

                <!--                <a title="My Wishlist" href="#" class="btn-heart">Wish list</a>-->
            </div>
        </div>

    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Danh mục</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                        <div class="vertical-menu-content is-home">
                            <ul class="vertical-menu-list">
                                <li><a href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/12.png">Electronics</a></li>
                                <li>
                                    <a class="parent" href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/13.png">Sports &amp; Outdoors</a>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Tennis</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Tennis</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Swimming</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-group col-sm-4">
                                                <h4 class="mega-group-header"><span>Shoes</span></h4>
                                                <ul class="group-link-default">
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Coats &amp; Jackets</a></li>
                                                    <li><a href="#">Blouses &amp; Shirts</a></li>
                                                    <li><a href="#">Tops &amp; Tees</a></li>
                                                    <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                    <li><a href="#">Intimates</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-custom-html col-sm-12">
                                                <a href="#"><img src="/images/banner/banner-megamenu.jpg" alt="Banner"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/14.png">Smartphone &amp; Tablets</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/15.png">Health &amp; Beauty Bags</a></li>
                                <li>
                                    <a class="parent" href="#">
                                        <img class="icon-menu" alt="Funky roots" src="/images/menu/16.png">Shoes &amp; Accessories</a>
                                    <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-12">
                                                <h4 class="mega-group-header"><span>Special products</span></h4>
                                                <div class="row mega-products">
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="/images/menu/p10.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="/images/menu/p11.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="/images/menu/p12.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="/images/menu/p13.jpg" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/17.png">Toys &amp; Hobbies</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/18.png">Computers &amp; Networking</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/19.png">Laptops &amp; Accessories</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/20.png">Jewelry &amp; Watches</a></li>
                                <li><a href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/21.png">Flashlights &amp; Lamps</a></li>
                                <li>
                                    <a href="#">
                                        <img class="icon-menu" alt="Funky roots" src="/images/menu/21.png">
                                        Cameras &amp; Photo
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <img class="icon-menu" alt="Funky roots" src="/images/menu/22.png">
                                        Television
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <img class="icon-menu" alt="Funky roots" src="/images/menu/12.png">Computers &amp; Networking
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <img class="icon-menu" alt="Funky roots" src="/images/menu/14.png">
                                        Toys &amp; Hobbies
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#"><img class="icon-menu" alt="Funky roots" src="/images/menu/17.png">Jewelry &amp; Watches</a></li>
                            </ul>
                            <div class="all-category"><span class="open-cate">All Categories</span></div>
                        </div>
                    </div>
                </div>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Trang chủ</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Thời trang</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="/images/menu/men.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Thời trang nam</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="/images/menu/women.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Thời trang nữ</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="/images/menu/kid.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Trẻ em</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Giày,dép</a></li>
                                                    <li class="link_container"><a href="#">Quần áo</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Khăn quàng</a></li>
                                                    <li class="link_container"><a href="#">Phụ kiện</a></li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="/images/menu/trending.png" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Xu hướng</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Quần áo nam</a></li>
                                                    <li class="link_container"><a href="#">Quần áo trẻ em</a></li>
                                                    <li class="link_container"><a href="#">Quần áo nữ</a></li>
                                                    <li class="link_container"><a href="#">Phụ kiện</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Thể thao</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Ẩm thực</a>
                                        <ul class="mega_dropdown dropdown-menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Châu á</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Vietnamese Pho</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Seafood</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sausages</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Meat Dishes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Desserts</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Châu âu</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Greek Potatoes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Chicken</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Italian Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">French Cakes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Đồ ăn nhanh</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Hamberger</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sandwich</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Salad</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Paste</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <img src="/images/menu/banner-topmenu.jpg" alt="Banner">
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Điện máy</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="#">Điện thoại</a></li>
                                                    <li class="link_container"><a href="#">Máy tính bảng</a></li>
                                                    <li class="link_container"><a href="#">Laptop</a></li>
                                                    <li class="link_container"><a href="#">Memory Cards</a></li>
                                                    <li class="link_container"><a href="#">Phụ kiện</a></li>
                                                </ul>
                                            </li>
                                        </ul> 
                                    </li>
                                    <li><a href="category.html">Đồ nội thất</a></li>
                                    <li><a href="category.html">Đồ trang sức</a></li>
                                    <li><a href="category.html">Bài viết</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                   <!-- <li><a class="link-buytheme" href="#"><i class="fa fa-angle-double-right"></i></a></li> -->
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>