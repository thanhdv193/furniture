<?php
use app\components\helpers\HelperLink;
use yii\helpers\Url;
?>
<div id="em-main-megamenu">
    <div class="em-menu">
        <div class="megamenu-wrapper wrapper-4_7164">
            <div class="em_nav" id="toogle_menu_4_7164">
                <ul class="hnav em_hoz_menu effect-menu">
                    <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                        <a class="em-menu-link" href="<?php Url::base('http') ?>/home.html"> <span> Trang chủ </span> </a>
                        <!-- /.menu-container -->
                    </li><!-- /.menu-item-link -->
                    <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                        <a class="em-menu-link" href="<?php Url::base('http') ?>/gioi-thieu.html"> <span> Giới thiệu </span> </a>
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
                                                <ul class="menu-container">
                                                    <?php foreach($category as $value){ ?>
                                                    <li class="menu-item-link menu-item-depth-1 "> <a class="em-menu-link" href="<?php echo HelperLink::rewriteUrlMulti(array($value['id'],0), $value['title'], Yii::$app->params['urlSite']['category']) ?>"><span><?php echo $value['title'] ?></span> </a>
                                                        </li>                                                                                                        
                                                    <?php }?>                                                    
                                                </ul><!-- /.menu-container -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- /.menu-container -->
                    </li><!-- /.menu-item-link -->
                    <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                        <a class="em-menu-link" href="<?php Url::base('http') ?>/khuyen-mai.html"> <span> Khuyến mại </span> </a>
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
                        <a class="em-menu-link" href="<?php Url::base('http') ?>/tin-tuc.html"> <span> Tin tức </span> </a>
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
                        <a class="em-menu-link" href="<?php Url::base('http') ?>/lien-he.html"> <span> Liên hệ </span> </a>
                        <!-- /.menu-container -->
                    </li><!-- /.menu-item-link -->
                </ul><!-- /.hnav em_hoz_menu -->
            </div><!-- /.em_nav -->
        </div><!-- /.megamenu-wrapper -->
    </div><!-- /.em-menu -->
</div>