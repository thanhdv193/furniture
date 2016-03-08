<?php

use app\components\helpers\MenuLeft;
?>
<div class="em-wrapper-area02">
    <div class="menu-wrapper hidden-xs">
        <div id="menuleftText" class="all_categories">
            <div class="menuleftText-title">
                <div class="menuleftText"><span class="em-text-upercase">Danh mục</span>
                </div>
            </div>
        </div>
        <div class="menuleft">
            <div id="menu-default" class="mega-menu em-menu-icon">
                <div class="megamenu-wrapper wrapper-5_4607">
                    <div class="em_nav" id="toogle_menu_5_4607">
                        <ul class="vnav em-menu-icon effect-menu em-menu-long">                                                                                              
                            <?php foreach ($menu as $key => $value)
                                { ?>
                                <li class="menu-item-link menu-item-depth-0 fa fa-video-camera menu-item-parent">
                                    <?php if ($value['lever'] == 1)
                                    { ?>
                                        <a class="em-menu-link" href="#"> <span> <?php echo $value['name'] ?> </span> </a>
                                    <?php } ?>
                                    <?php if (isset($menu[$key + 1])) { ?>
                                        <?php if ($menu[$key + 1]['id_parent'] == $value['id']){ ?>
                                            <ul class="menu-container">
                                                <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col5  fix-top menu-item-parent" style="">
                                                    <ul class="menu-container">
                                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-24 alpha menu-item-parent" style="">
                                                            <ul class="menu-container">
                                                                <li class="menu-item-text menu-item-depth-3  ">                                                        
                                                                    <ul class="menu-container">
                                                                        <?php foreach ($menu as $value2) { ?>
                                                                            <?php if ($value2['id_parent'] == $value['id']){ ?>
                                                                                <li class="menu-item-link menu-item-depth-1 first"><a class="em-menu-link" href="#"><span><?php echo $value2['name'] ?></span> </a>
                                                                                </li>
                                                                            <?php } ?>
                                                                        <?php } ?>                                                                                                                       
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                <?php } ?>
                            <?php } ?>
                                </li>                            
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>