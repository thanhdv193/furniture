<?php
use yii\helpers\Url;

$this->title = 'Trang quản trị';
$this->params['breadcrumbs'][] = '';
?>

<div class="row" style="padding: 10px 10px;">
    <input type="hidden" value="default_index" name="index-nav-menu-left" />
    <div class="" style="clear: both;margin-left: auto;margin-right: auto;width: 100%;">        
        <div class="row panel-quick-page">
            <div class="col-xs-4 col-sm-5 col-md-4 page-user">
                <div class="panel">
                    <a href="<?php Url::base('http') ?>/backend/user/">
                        <div class="panel-heading">
                            <h4 class="panel-title">Quản lý người dùng</h4>
                        </div>
                        <div class="panel-body">
                            <div class="page-icon"><i class="icon ion-person-stalker"></i></div>
                        </div>
                    </a>                    
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 page-products">
                <div class="panel">
                    <a href="<?php Url::base('http') ?>/backend/product/">
                        <div class="panel-heading">
                            <h4 class="panel-title">Quản lý sản phẩm</h4>
                        </div>
                        <div class="panel-body">
                            <div class="page-icon"><i class="fa fa-shopping-cart"></i></div>
                        </div>
                    </a>                    
                </div>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 page-events">
                <div class="panel">
                    <a href="#">
                        <div class="panel-heading">
                            <h4 class="panel-title">Sự kiện</h4>
                        </div>
                        <div class="panel-body">
                            <div class="page-icon"><i class="icon ion-ios-calendar-outline"></i></div>
                        </div>
                    </a>
                    
                </div>
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2 page-messages">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">Tin nhắn</h4>
                    </div>
                    <div class="panel-body">
                        <div class="page-icon"><i class="icon ion-email"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-sm-5 col-md-2 page-reports">
                <div class="panel">
                    <a href="#">
                        <div class="panel-heading">
                            <h4 class="panel-title">Báo cáo</h4>
                        </div>
                        <div class="panel-body">
                            <div class="page-icon"><i class="icon ion-arrow-graph-up-right"></i></div>
                        </div>
                    </a>
                    
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-2 page-statistics">
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">Statistics</h4>
                    </div>
                    <div class="panel-body">
                        <div class="page-icon"><i class="icon ion-ios-pulse-strong"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 page-support">
                <div class="panel">
                    <a href="#">
                        <div class="panel-heading">
                            <h4 class="panel-title">Sản phẩm được quan tâm</h4>
                        </div>
                        <div class="panel-body">
                            <div class="page-icon"><i class="icon ion-help-buoy"></i></div>
                        </div>
                    </a>
                    
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-2 page-privacy">
                <div class="panel">
                    <a href="#">
                        <div class="panel-heading">
                            <h4 class="panel-title">Phân quyền</h4>
                        </div>
                        <div class="panel-body">
                            <div class="page-icon"><i class="icon ion-android-lock"></i></div>
                        </div>
                    </a>
                    
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-2 page-settings">
                <div class="panel">
                    <a href="#">
                        <div class="panel-heading">
                            <h4 class="panel-title">Cài đặt</h4>
                        </div>
                        <div class="panel-body">
                            <div class="page-icon"><i class="icon ion-gear-a"></i></div>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div><!-- row -->

    </div><!-- col-md-9 -->    
</div>
<div class="row" style="padding: 10px 10px;">
    <div style="clear: both;margin-left: auto;margin-right: auto;width:100%;">
        <div class="col-lg-4">
            <div class="panel panel-primary list-announcement">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-bar-chart"></i> Thống kê chung</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled mb20">
                        <li>
                            <a href="#">Sản phẩm</a>
                            <small>Cập nhật : 27/04/2016<a href="#"> <?= $data['listProduct'] == null ? '0' : $data['listProduct']  ?> sản phẩm</a></small>
                        </li>
                        <li>
                            <a href="#">Danh mục sản phẩm</a>
                            <small>Cập nhật : 27/04/2016 <a href="#">11 danh mục</a></small>
                        </li>
                        <li>
                            <a href="#">Thành viên</a>
                            <small>Cập nhật : 27/04/2016 <a href="#">2 thành viên</a></small>
                        </li>
                        <li>
                            <a href="#">Nhân viên</a>
                            <small>Cập nhật : 27/04/2016<a href="#">2 nhân viên</a></small>
                        </li>
                        <li>
                            <a href="#">Bình luận</a>
                            <small>Cập nhật : 27/04/2016 <a href="#">2 bình luận</a></small>
                        </li>
                    </ul>
                </div>                
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-primary list-announcement">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-bar-chart"></i> Thống kê mua bán</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled mb20">
                        <li>
                            <a href="#">Tổng đơn đặt hàng</a>
                            <small>Cập nhật : <?= Yii::$app->formatter->asDatetime(date('d-m-Y h:i:s')); ?><a href="#"> <?= $data['allOrder']?> đơn hàng</a></small>
                        </li>
                        <li>
                            <a href="#">Đơn hàng thành công</a>
                            <small>Cập nhật : <?= Yii::$app->formatter->asDatetime(date('d-m-Y h:i:s')); ?><a href="#"><?= $data['orderDone']?> đơn hàng</a></small>
                        </li>
                        <li>
                            <a href="#">Đơn hàng đang đợi</a>
                            <small>Cập nhật : <?= Yii::$app->formatter->asDatetime(date('d-m-Y h:i:s')); ?><a href="#"><?= $data['orderWatting']?> đơn hàng</a></small>
                        </li>
                        <li>
                            <a href="#">Đơn hàng chưa giao</a>
                            <small>Cập nhật : <?= Yii::$app->formatter->asDatetime(date('d-m-Y h:i:s')); ?><a href="#"><?= $data['allOrder']?> đơn hàng</a></small>
                        </li>
                    </ul>
                </div>                
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-primary list-announcement">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-bar-chart"></i> Sản phẩm bán chạy</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled mb20">
                        <?php if($data['productTop'] == null){?>
                            <p>Chưa có sản phẩm nào</p>
                        <?php }else{ ?> 
                            <?php foreach($data['productTop'] as $value){ ?>
                            <li>
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="/web/images/user9.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><?=$value['title'] ?></a>
                                </div>                            
                                <small>Cập nhật : <?= Yii::$app->formatter->asDatetime(date('d-m-Y h:i:s')); ?> <a href="#">Đã bán <?=$value['count'] ?> sản phẩm</a></small>
                            </li>                            
                            <?php } ?>
                        <?php }?>                        
                    </ul>
                </div>                
            </div>
        </div>
    </div>

    <!-- col-md-12 -->
</div><!-- row -->