<?php

use yii\helpers;
use yii\helpers\Url;

?>
<div class="widget stay-on-collapse" id="widget-sidebar">
    <span class="widget-heading">Home</span>
    <nav role="navigation" class="widget-body">
        <ul class="acc-menu">            
            <li><a href="<?php Url::base('')?>/backend"><i class="fa  fa-home"></i><span>Trang chủ</span></a></li>      
            <li><a href="javascript:;"><i class="fa fa-reddit"></i><span>Quản lý tài khoản</span><span class="badge badge-info">2</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/user/index">Danh sách tài khoản</a></li>
                    <li><a href="<?php Url::base('')?>/backend/user/create">Thêm mới tài khoản</a></li>                    
                </ul>
            </li>
        </ul>
    </nav>
</div>
<div class="widget stay-on-collapse" id="widget-sidebar">
    <span class="widget-heading">Danh mục</span>
    <nav role="navigation" class="widget-body">
        <ul class="acc-menu">                       
            <li><a href="javascript:;"><i class="fa fa-rocket"></i><span>Quản lý sản phẩm</span><span class="badge badge-info">5</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/email/index">Nhóm sản phẩm</a></li>
                    <li><a href="<?php Url::base('')?>/backend/email/index">Loại sản phẩm</a></li>
                    <li><a href="<?php Url::base('')?>/backend/email/index">Hãng sản phẩm</a></li>
                    <li><a href="<?php Url::base('')?>/backend/product/index">Danh sách sản phẩm</a></li>    
                    <li><a href="<?php Url::base('')?>/backend/email/index">Thêm mới sản phẩm</a></li>
                </ul>
            </li>

            <li><a href="javascript:;"><i class="fa fa-shopping-cart"></i><span>Quản lý đơn hàng</span><span class="badge badge-info">9</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/email/index">Danh sách đơn hàng</a></li>
                    
                </ul>
            </li>
            <li><a href="javascript:;"><i class="fa  fa-user"></i><span>Quản lý khách hàng</span><span class="badge badge-info">2</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/email/index">Danh sách khách hàng</a></li>
                    <li><a href="<?php Url::base('')?>/backend/email/index">Thêm mới khách hàng</a></li>                    
                </ul>
            </li>            
        </ul>
    </nav>
</div>
<div class="widget stay-on-collapse">
    <div class="widget-heading">Thiết lập</div>
    <nav class="widget-body">
        <ul class="acc-menu">
            <li><a href="javascript:;"><i class="fa  fa-picture-o"></i><span>Quản lý banner</span><span class="badge badge-info">1</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/email/index">Banner</a></li>                    
                </ul>
            </li>
            <li><a href="javascript:;"><i class="fa fa-university"></i><span>Quản lý Showrooms</span><span class="badge badge-info">1</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/email/index">Vùng miền Showrooms</a></li>           
                    <li><a href="<?php Url::base('')?>/backend/email/index">Danh sách Showrooms</a></li>                    
                </ul>
            </li>
            <li><a href="javascript:;"><i class="fa  fa-envelope-o"></i><span>Email</span><span class="badge badge-info">2</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/email/index">Địa chỉ Email </a></li>
                    <li><a href="<?php Url::base('')?>/backend/email/index">Giao diện gửi email</a></li>
                    
                </ul>
            </li>
            <li><a href="javascript:;"><i class="fa  fa-info-circle"></i><span>Thông tin shop</span><span class="badge badge-info">4</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/email/index">Thông tin giới thiệu</a></li>
                    <li><a href="<?php Url::base('')?>/backend/email/index">Thông tin liên hệ</a></li>
                    <li><a href="<?php Url::base('')?>/backend/email/index">Logo shop</a></li>
                    <li><a href="<?php Url::base('')?>/backend/email/index">Vận chuyển hàng</a></li>
                </ul>                
            </li>
            
        </ul>
    </nav>
</div>
<div class="widget stay-on-collapse">
    <div class="widget-heading">Quản lý bài viết</div>
    <nav class="widget-body">
        <ul class="acc-menu">
            <li><a href="javascript:;"><i class="fa fa-book"></i><span> Bài viết</span><span class="badge badge-info">2</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/email/index">Danh mục bài viết</a></li>
                    <li><a href="<?php Url::base('')?>/backend/email/index">Danh sách bài viết</a></li>                    
                </ul>
            </li>
            
            <li><a href="javascript:;"><i class="fa fa-bell"></i><span>Tin tức</span><span class="badge badge-info">3</span></a>
                <ul class="acc-menu">
                    <li><a href="<?php Url::base('')?>/backend/email/index">Danh mục tin tức</a></li>                    
                    <li><a href="<?php Url::base('')?>/backend/email/index">Tin tức</a></li>    
                    <li><a href="<?php Url::base('')?>/backend/email/index">Khung giờ giảm giá</a></li>  
                </ul>
            </li>
        </ul>
    </nav>
</div>