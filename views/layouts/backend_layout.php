<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAssetBackend;
use app\widgets\BackendMenuWidget;
use yii\helpers\Url;
use app\models\Orders;


AppAssetBackend::register($this);
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
    <body>
        <?php $this->beginBody() ?>       
            <header>
                <div class="headerpanel">

                    <div class="logopanel">
                        <h2><a href="index.html">Quirk</a></h2>
                    </div><!-- logopanel -->

                    <div class="headerbar">

                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

                        <div class="searchpanel">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div><!-- input-group -->
                        </div>

                        <div class="header-right">
                            <ul class="headermenu">
                                <li>
                                    <div id="noticePanel" class="btn-group">
                                        <button class="btn btn-notice alert-notice" data-toggle="dropdown">
                                            <i class="fa fa-globe"></i>
                                        </button>
                                        <div id="noticeDropdown" class="dropdown-menu dm-notice pull-right">
                                            <div role="tabpanel">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                                    <li class="active"><a data-target="#notification" data-toggle="tab">Notifications (2)</a></li>
                                                    <li><a data-target="#reminders" data-toggle="tab">Reminders (4)</a></li>
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="notification">
                                                        <ul class="list-group notice-list">
                                                            <li class="list-group-item unread">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <i class="fa fa-envelope"></i>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        <h5><a href="#">New message from Weno Carasbong</a></h5>
                                                                        <small>June 20, 2015</small>
                                                                        <span>Soluta nobis est eligendi optio cumque...</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item unread">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <i class="fa fa-user"></i>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        <h5><a href="#">Renov Leonga is now following you!</a></h5>
                                                                        <small>June 18, 2015</small>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <i class="fa fa-user"></i>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        <h5><a href="#">Zaham Sindil is now following you!</a></h5>
                                                                        <small>June 17, 2015</small>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <i class="fa fa-thumbs-up"></i>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        <h5><a href="#">Rey Reslaba likes your post!</a></h5>
                                                                        <small>June 16, 2015</small>
                                                                        <span>HTML5 For Beginners Chapter 1</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <i class="fa fa-comment"></i>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        <h5><a href="#">Socrates commented on your post!</a></h5>
                                                                        <small>June 16, 2015</small>
                                                                        <span>Temporibus autem et aut officiis debitis...</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <a class="btn-more" href="#">View More Notifications <i class="fa fa-long-arrow-right"></i></a>
                                                    </div><!-- tab-pane -->

                                                    <div role="tabpanel" class="tab-pane" id="reminders">
                                                        <h1 id="todayDay" class="today-day">...</h1>
                                                        <h3 id="todayDate" class="today-date">...</h3>

                                                        <h5 class="today-weather"><i class="wi wi-hail"></i> Cloudy 77 Degree</h5>
                                                        <p>Thunderstorm in the area this afternoon through this evening</p>

                                                        <h4 class="panel-title">Upcoming Events</h4>
                                                        <ul class="list-group">
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <h4>20</h4>
                                                                        <p>Aug</p>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        <h5><a href="#">HTML5/CSS3 Live! United States</a></h5>
                                                                        <small>San Francisco, CA</small>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <h4>05</h4>
                                                                        <p>Sep</p>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        <h5><a href="#">Web Technology Summit</a></h5>
                                                                        <small>Sydney, Australia</small>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <h4>25</h4>
                                                                        <p>Sep</p>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        <h5><a href="#">HTML5 Developer Conference 2015</a></h5>
                                                                        <small>Los Angeles CA United States</small>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <h4>10</h4>
                                                                        <p>Oct</p>
                                                                    </div>
                                                                    <div class="col-xs-10">
                                                                        <h5><a href="#">AngularJS Conference 2015</a></h5>
                                                                        <small>Silicon Valley CA, United States</small>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <a class="btn-more" href="#">View More Events <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-logged" data-toggle="dropdown">
                                            <?php if (Yii::$app->user->isGuest == false)
                                            { ?>
                                                <?php
                                                if (Yii::$app->user->identity->avatar == null)
                                                {
                                                    ?>
                                                    <img src="<?php echo Url::base('http') ?>/upload/avatar/no-avatar.png" alt="">
                                                <?php
                                                } else
                                                {
                                                    ?>
                                                    <img src="<?php echo Url::base('http') ?>/<?php echo Yii::$app->user->identity->avatar ?>" alt="">
                                                <?php } ?>
                                                <?php if (Yii::$app->user->isGuest == false)
                                                {
                                                    ?>
                                                <?php echo Yii::$app->user->identity->username ?>
                                                <?php } ?>
                                                <?php } ?>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <?php if (Yii::$app->user->isGuest == false) {?>
                                            <li><a href="<?php echo Url::base('http') ?>/backend/user/view?id=<?php echo Yii::$app->user->identity->id ?>"><i class="glyphicon glyphicon-user"></i> Trang cá nhân</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                                            <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Trợ giúp</a></li>
                                            <li><a href="<?php echo Url::base('http') ?>/site/logout" data-method="post"><i class="glyphicon glyphicon-log-out"></i> Đăng xuất (<?php echo Yii::$app->user->identity->username ?>)</a></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <button id="chatview" class="btn btn-chat alert-notice">
                                        <span class="badge-alert"></span>
                                        <i class="fa fa-comments-o"></i>
                                    </button>
                                </li>
                            </ul>
                        </div><!-- header-right -->
                    </div><!-- headerbar -->
                </div><!-- header-->
            </header>
        <section>            
            <div class="leftpanel">
                <div class="leftpanelinner">
                    
                    <div class="media leftpanel-profile">
                        <div class="media-left">
                            
                            <a href="#">
                                <?php if(Yii::$app->user->isGuest == false) { ?>
                                <?php if(Yii::$app->user->identity->avatar == null) { ?>
                                    <img src="<?php Url::base('') ?>/upload/avatar/no-avatar.png" alt="" class="media-object img-circle">
                                <?php }else {?>
                                    <img src="<?php echo Url::base('http') ?>/<?php echo Yii::$app->user->identity->avatar?>" alt="" class="media-object img-circle">
                                <?php } ?>
                                
                                <?php } ?>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php if(Yii::$app->user->isGuest == false) { ?>
                                                                <?php echo Yii::$app->user->identity->username ?>
                                                      <?php } ?><a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"><i class="fa fa-angle-down"></i></a></h4>
                            <span>Software Engineer</span>
                        </div>
                    </div><!-- leftpanel-profile -->

                    <div class="leftpanel-userinfo collapse" id="loguserinfo">
                        <?php if (Yii::$app->user->isGuest == false) {?>
                        <h5 class="sidebar-title">Địa chỉ</h5>
                        <address>
                            
                            <?php echo Yii::$app->user->identity->address ?>
                           
                        </address>
                        <h5 class="sidebar-title">Liên hệ</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <label class="pull-left">Email</label>
                                <span class="pull-right"><?php echo Yii::$app->user->identity->email ?></span>
                            </li>
                            <li class="list-group-item">
                                <label class="pull-left">Home</label>
                                <span class="pull-right">(032) 1234 567</span>
                            </li>
                            <li class="list-group-item">
                                <label class="pull-left">Mobile</label>
                                <span class="pull-right">+63012 3456 789</span>
                            </li>
                            <li class="list-group-item">
                                <label class="pull-left">Mạng xã hội</label>
                                <div class="social-icons pull-right">
                                    <a href="#"><i class="fa fa-facebook-official"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                         <?php }?>
                    </div><!-- leftpanel-userinfo -->

                    <ul class="nav nav-tabs nav-justified nav-sidebar">
                        <li class="tooltips active" data-toggle="tooltip" title="Main Menu"><a data-toggle="tab" data-target="#mainmenu"><i class="tooltips fa fa-ellipsis-h"></i></a></li>
                        <li class="tooltips unread" data-toggle="tooltip" title="Check Mail"><a data-toggle="tab" data-target="#emailmenu"><i class="tooltips fa fa-envelope"></i></a></li>
                        <li class="tooltips" data-toggle="tooltip" title="Contacts"><a data-toggle="tab" data-target="#contactmenu"><i class="fa fa-user"></i></a></li>
                        <li class="tooltips" data-toggle="tooltip" title="Settings"><a data-toggle="tab" data-target="#settings"><i class="fa fa-cog"></i></a></li>
                        <li class="tooltips" data-toggle="tooltip" title="Log Out"><a href="signin.html"><i class="fa fa-sign-out"></i></a></li>
                    </ul>

                    <div class="tab-content">

                        <!-- ################# MAIN MENU ################### -->

                        <div class="tab-pane active" id="mainmenu">
                            <h5 class="sidebar-title">Favorites</h5>
                            <ul class="nav nav-pills nav-stacked nav-quirk">
                                <li><a href="<?php Url::base('http') ?>/backend/default/index"><i class="fa fa-home"></i> <span>Trang chủ</span></a></li>
                                
                                <li class="nav-parent">
                                    <a href="#"><i class="fa fa-check-square"></i> <span>Quản lý người dùng</span></a>
                                    <ul class="children">
                                        <li><a href="<?php Url::base('http') ?>/backend/user/">Danh sách người dùng</a></li>  
                                        <li><a href="<?php Url::base('http') ?>/backend/user/create">Thêm mới người dùng</a></li>  
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a href="#"><i class="fa fa-check-square"></i> <span>Đơn hàng</span></a>
                                    <ul class="children">
                                        <li><a href="<?php Url::base('http') ?>/backend/orders?id=<?php echo Orders::order_all ?>">Tất cả đơn hàng</a></li>  
                                        <li><a href="<?php Url::base('http') ?>/backend/orders?id=<?php echo Orders::order_process ?>">Đơn hàng chưa xử lý</a></li>
                                        <li><a href="<?php Url::base('http') ?>/backend/orders?id=<?php echo Orders::order_process_watting ?>">Đơn hàng đang chờ</a></li>  
                                        <li><a href="<?php Url::base('http') ?>/backend/orders?id=<?php echo Orders::order_process_done ?>">Đơn hàng đã thanh toán</a></li>
                                        
                                    </ul>
                                </li>                               
                            </ul>

                            <h5 class="sidebar-title">Main Menu</h5>
                            <ul class="nav nav-pills nav-stacked nav-quirk">
                                <li class="nav-parent">
                                    <a href="#"><i class="fa fa-check-square"></i> <span>Quản lý sản phẩm</span></a>
                                    <ul class="children">
                                        <li class="product_index"><a href="<?php Url::base('http') ?>/backend/product/">Sản phẩm</a></li>                                                                            
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a href="#"><i class="fa fa-check-square"></i> <span>Danh mục sản phẩm</span></a>
                                    <ul class="children">
                                        <li class="product_type_index"><a href="<?php Yii::$app->params['urlSite']['site'] ?>/backend/product-type">Danh mục sản phẩm</a></li>
                                        <li class="product_group_index"><a href="<?php Yii::$app->params['urlSite']['site'] ?>/backend/product-group">Nhóm sản phẩm</a></li>                                        
                                    </ul>
                                </li>                               
                                <li class="nav-parent">
                                    <a href="#"><i class="fa fa-check-square"></i> <span>Quản lý thông tin</span></a>
                                    <ul class="children">
                                        <li><a href="#">Thông tin giới thiệu</a></li>   
                                        <li><a href="<?php Url::base('http') ?>/backend/contact/index">Thông tin liên hệ</a></li>    
                                    </ul>
                                </li> 
                                <li class="nav-parent">
                                    <a href="#"><i class="fa fa-check-square"></i> <span>Banner</span></a>
                                    <ul class="children">
                                        <li><a href="<?php Url::base('http') ?>/backend/banner-slide/create">Thêm banner</a></li>
                                        <li><a href="<?php Url::base('http') ?>/backend/banner-slide/index">Danh sách banner</a></li>
                                        
                                    </ul>
                                </li>  
                                 <li class="nav-parent">
                                    <a href="#"><i class="fa fa-check-square"></i> <span>Báo cáo</span></a>
                                    <ul class="children">
                                        <li><a href="general-forms.html">Form Elements</a></li>
                                        <li><a href="form-validation.html">Form Validation</a></li>
                                        <li><a href="form-wizards.html">Form Wizards</a></li>
                                        <li><a href="wysiwyg.html">Text Editor</a></li>
                                    </ul>
                                </li>         
                            </ul>
                        </div><!-- tab-pane -->

                        <!-- ######################## EMAIL MENU ##################### -->

                        <div class="tab-pane" id="emailmenu">
                            <div class="sidebar-btn-wrapper">
                                <a href="compose.html" class="btn btn-danger btn-block">Compose</a>
                            </div>

                            <h5 class="sidebar-title">Mailboxes</h5>
                            <ul class="nav nav-pills nav-stacked nav-quirk nav-mail">
                                <li><a href="email.html"><i class="fa fa-inbox"></i> <span>Inbox (3)</span></a></li>
                                <li><a href="email.html"><i class="fa fa-pencil"></i> <span>Draft (2)</span></a></li>
                                <li><a href="email.html"><i class="fa fa-paper-plane"></i> <span>Sent</span></a></li>
                            </ul>

                            <h5 class="sidebar-title">Tags</h5>
                            <ul class="nav nav-pills nav-stacked nav-quirk nav-label">
                                <li><a href="#"><i class="fa fa-tags primary"></i> <span>Communication</span></a></li>
                                <li><a href="#"><i class="fa fa-tags success"></i> <span>Updates</span></a></li>
                                <li><a href="#"><i class="fa fa-tags warning"></i> <span>Promotions</span></a></li>
                                <li><a href="#"><i class="fa fa-tags danger"></i> <span>Social</span></a></li>
                            </ul>
                        </div><!-- tab-pane -->

                        <!-- ################### CONTACT LIST ################### -->

                        <div class="tab-pane" id="contactmenu">
                            <div class="input-group input-search-contact">
                                <input type="text" class="form-control" placeholder="Search contact">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                            <h5 class="sidebar-title">My Contacts</h5>
                            <ul class="media-list media-list-contacts">
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Christina R. Hill</h4>
                                            <span><i class="fa fa-phone"></i> 386-752-1860</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user2.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Floyd M. Romero</h4>
                                            <span><i class="fa fa-mobile"></i> +1614-650-8281</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user3.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jennie S. Gray</h4>
                                            <span><i class="fa fa-phone"></i> 310-757-8444</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user4.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Alia J. Locher</h4>
                                            <span><i class="fa fa-mobile"></i> +1517-386-0059</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user5.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Nicholas T. Hinkle</h4>
                                            <span><i class="fa fa-skype"></i> nicholas.hinkle</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user6.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Jamie W. Bradford</h4>
                                            <span><i class="fa fa-phone"></i> 225-270-2425</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user7.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Pamela J. Stump</h4>
                                            <span><i class="fa fa-mobile"></i> +1773-879-2491</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user8.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Refugio C. Burgess</h4>
                                            <span><i class="fa fa-mobile"></i> +1660-627-7184</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user9.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Ashley T. Brewington</h4>
                                            <span><i class="fa fa-skype"></i> ashley.brewington</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="#">
                                        <div class="media-left">
                                            <img class="media-object img-circle" src="<?php Yii::$app->request->baseUrl ?>/images/user10.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Roberta F. Horn</h4>
                                            <span><i class="fa fa-phone"></i> 716-630-0132</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- tab-pane -->

                        <!-- #################### SETTINGS ################### -->

                        <div class="tab-pane" id="settings">
                            <h5 class="sidebar-title">General Settings</h5>
                            <ul class="list-group list-group-settings">
                                <li class="list-group-item">
                                    <h5>Daily Newsletter</h5>
                                    <small>Get notified when someone else is trying to access your account.</small>
                                    <div class="toggle-wrapper">
                                        <div class="leftpanel-toggle toggle-light success"></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <h5>Call Phones</h5>
                                    <small>Make calls to friends and family right from your account.</small>
                                    <div class="toggle-wrapper">
                                        <div class="leftpanel-toggle-off toggle-light success"></div>
                                    </div>
                                </li>
                            </ul>
                            <h5 class="sidebar-title">Security Settings</h5>
                            <ul class="list-group list-group-settings">
                                <li class="list-group-item">
                                    <h5>Login Notifications</h5>
                                    <small>Get notified when someone else is trying to access your account.</small>
                                    <div class="toggle-wrapper">
                                        <div class="leftpanel-toggle toggle-light success"></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <h5>Phone Approvals</h5>
                                    <small>Use your phone when login as an extra layer of security.</small>
                                    <div class="toggle-wrapper">
                                        <div class="leftpanel-toggle toggle-light success"></div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- tab-pane -->


                    </div><!-- tab-content -->

                </div><!-- leftpanelinner -->
            </div><!-- leftpanel -->

            <div class="mainpanel">

                <!--<div class="pageheader">
                  <h2><i class="fa fa-home"></i> Dashboard</h2>
                </div>-->

                <div class="contentpanel">
                    <?=
                        Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>
                    <?= $content ?>
                </div><!-- contentpanel -->

            </div><!-- mainpanel -->

        </section>
                
        <?php $this->endBody() ?>
        <script>
            var baseUrl = "<?php echo Url::base('http') ?>";            
        </script>
    </body>
</html>
<?php $this->endPage() ?>
