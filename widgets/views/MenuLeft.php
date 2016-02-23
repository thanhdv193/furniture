<?php

use app\components\helpers\MenuLeft;
?>
<div class="em-wrapper-area02">
    <div class="menu-wrapper hidden-xs">
        <div id="menuleftText" class="all_categories">
            <div class="menuleftText-title">
                <div class="menuleftText"><span class="em-text-upercase">Danh mục sản phẩm</span>
                </div>
            </div>
        </div><!-- /.menuleftText -->
        <div class="menuleft">
            <div id="menu-default" class="mega-menu em-menu-icon">
                <div class="megamenu-wrapper wrapper-5_4607">
                    <div class="em_nav" id="toogle_menu_5_4607">
                        <ul class="vnav em-menu-icon effect-menu em-menu-long">                                                                    
                            <li class="menu-item-link menu-item-depth-0 fa fa-video-camera menu-item-parent">
                                <a class="em-menu-link" href="#"> <span> Trang 1 </span> </a>
                                <ul class="menu-container">
                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col5  fix-top menu-item-parent">
                                        <ul class="menu-container">
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-24 alpha menu-item-parent">
                                                <ul class="menu-container">
                                                    <li class="menu-item-text menu-item-depth-3  ">
<!--                                                        <h4>Jackets &amp; coats</h4>-->
                                                        <ul class="menu-container">
                                                            <li class="menu-item-link menu-item-depth-1 first"><a class="em-menu-link" href="#"><span>Landing Page</span> </a>
                                                            </li>
                                                            <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="typography.html"><span>Typography Page</span> </a>
                                                            </li>
                                                            <li class="menu-item-link menu-item-depth-1 "><a class="em-menu-link" href="#"><span>Widgets Page</span> </a>
                                                            </li>
                                                            <li class="menu-item-link menu-item-depth-1 label-new-menu "><a class="em-menu-link" href="contact.html"><span>Contact Page</span> </a>
                                                            </li>
                                                            <li class="menu-item-link menu-item-depth-1 last "><a class="em-menu-link" href="404.html"><span>404 Page</span> </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li><!-- /.menu-item-hbox -->
                                </ul>
                            </li><!-- /.menu-item-link -->                            
                        </ul><!-- /.vnav -->
                        <div class="menu-left">
                            <?php echo MenuLeft::menu($menu) ?>  
                        </div>
                        
                    </div>
                </div><!-- /.megamenu-wrapper -->
            </div>
        </div><!-- /.menuleft -->
    </div>
</div>