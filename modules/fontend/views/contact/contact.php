<?php

use yii\helpers;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Liên hệ</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Liên hệ với chúng tôi.</span>
        </h2>
        <!-- ../page heading-->
        <div id="contact_form" class="page-content page-contact">
            <div id="message-box-conact"></div>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="page-subheading">CONTACT FORM</h3>
                    <?php $form = ActiveForm::begin(['action' => ['contact/create'], 'method' => 'post']); ?>                    

                        <div class="contact-form-box">
                            <div class="form-group">                                
                                <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Họ tên') ?>
                            </div>
                            <div class="form-group">
                                
                                <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label('Số điện thoại') ?>
                            </div>
                            <div class="form-group">
                               
                                <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('Địa chỉ email') ?>
                            </div>
                            <div class="form-group">
                                
                                <?= $form->field($model, 'description')->textarea(array('rows'=>10,'cols'=>5))->label('Tin nhắn') ?>
                                
                            </div>
                            <div class="form-group">
                                <button type="submit" id="btn-send-contact" class="btn">Gửi</button>
                            </div>

                        </div>
                        <?php ActiveForm::end(); ?>                   
                </div>
                <div class="col-xs-12 col-sm-6" id="contact_form_map">
                    <h3 class="page-subheading">Thông tin</h3>
<!--                    <p>Lorem ipsum dolor sit amet onsectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor dapibus eget. Mauris tincidunt aliquam lectus sed vestibulum. Vestibulum bibendum suscipit mattis.</p>
                    <br/>
                    <ul>
                        <li>Praesent nec tincidunt turpis.</li>
                        <li>Aliquam et nisi risus.&nbsp;Cras ut varius ante.</li>
                        <li>Ut congue gravida dolor, vitae viverra dolor.</li>
                    </ul>-->
                    <br/>
                    <ul class="store_info">
                        <li><i class="fa fa-home"></i>Khu 3, Xuân Lộc, Thanh Thủy, Phú Thọ</li>
                        <li><i class="fa fa-phone"></i><span>+ 0210.3688.872</span></li>
                        <li><i class="fa fa-phone"></i><span>+ 01647.519.202</span></li>
                        <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:%73%75%70%70%6f%72%74@%6b%75%74%65%74%68%65%6d%65.%63%6f%6d">thanhdv193@gmail.com</a></span></li>
                    </ul>                
                </div>
            </div>
            <div class="row">
                abc
            </div>
        </div>
    </div>
</div>