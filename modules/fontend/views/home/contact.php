<?php

use yii\helpers;
use yii\helpers\Url;

$this->title = 'Thông tin liên hệ';
?>
<div class="wrapper-breadcrums">
    <div class="col-sm-24">
        <div class="row">
            <div class="col-sm-24">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="<?php echo Url::base('http') ?>" title="Trang chủ"><span>Trang chủ</span></a> <span class="separator">/ </span>
                        </li>
                        <li class="contact"> <strong>Liên hệ</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="em-wrapper-main">
    <div class="container-fluid container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>
            <div class="em-wrapper-area03"></div>
            <div class="em-wrapper-area04"></div>
            <div class="em-main-container em-col1-layout">
                <div class="row">
                    <div class="em-col-main col-sm-24 col-sm-offset-1">
                        <div id="messages_product_view"></div>
                        <div class="page-title">
                            <h1>Thông tin liên hệ</h1>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="em-maps-wrapper">                                        
                                        <p>You can change visual appearance of almost every element of this HTML theme. You can set your favorite colors and generate css file from the admin.</p>
                                    </div> <address><span class="fa fa-map-marker secondary2">&nbsp;</span>Địa chỉ: NewYork</address>
                                    <p class="em-phone"><span class="fa fa-phone secondary2">&nbsp;</span>Số điện thoại: <span class="primary"> 012345678xxx</span>
                                    </p>
                                    <p class="em-fax"><span class="fa fa-fax secondary2">&nbsp;</span>Fax: <span class="primary">123456789xxxx</span>
                                    </p>
                                    <p class="em-email"><span class="fa fa-envelope secondary2">&nbsp;</span>Email: <span class="secondary2">owner@example.com</span>
                                    </p>
                                </div>
                                <div class="row">                            
                                    <form id="contactForm" method="post">
                                        <div class="fieldset">
                                            <h2 class="legend">Contact Information</h2>
                                            <ul class="form-list">
                                                <li class="fields">
                                                    <div class="field">
                                                        <label for="name" class="required"><em>*</em>Họ tên</label>
                                                        <div class="input-box">
                                                            <input name="name" id="name" title="Name" value="" class="input-text required-entry" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="field">
                                                        <label for="email" class="required"><em>*</em>Email</label>
                                                        <div class="input-box">
                                                            <input name="email" id="email" title="Email" value="" class="input-text required-entry validate-email" type="text" />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="telephone">Số điện thoại</label>
                                                    <div class="input-box">
                                                        <input name="telephone" id="telephone" title="Telephone" value="" class="input-text" type="text" />
                                                    </div>
                                                </li>
                                                <li class="wide">
                                                    <label for="comment" class="required"><em>*</em>Nội dung</label>
                                                    <div class="input-box">
                                                        <textarea name="comment" id="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="buttons-set">
                                            <input type="text" name="hideit" id="hideit" value="" style="display:none !important;" />
                                            <button type="submit" title="Submit" class="button"><span><span>Gửi</span></span>
                                            </button>
                                            <p class="required">* Thông tin bắt buộc</p>
                                        </div>
                                    </form><!-- /#contactForm -->
                                </div>                                                 
                                
                            </div>
                            <div class="col-sm-12">
                                <div id="map-canvas" style="width: 100%px; height: 500px"></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.17&amp;signed_in=true"></script>
<script type="text/javascript">
    function initialize() {
        var myLatlng = new google.maps.LatLng(21.2138312, 105.324249);
        var mapOptions = {
            zoom: 10,
            center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var contentString = 'We really care about you and your website as much as you do. Purchasing EM0131 Everything or any other theme from us you get 100% free support.';
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var image = 'images/gmap_icon.png';
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: image,
            title: 'EM0131 Everything'
        });
        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
