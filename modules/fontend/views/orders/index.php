<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Đơn hàng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper-breadcrums">
    <div class="container">
        <div class="row">
            <div class="col-sm-24">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="<?php echo Url::base('http') ?>" title="Trang chủ"><span >Trang chủ</span></a> <span class="separator">/ </span>
                        </li>
                        <li class="cms_page"> <strong>Đơn hàng</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="em-wrapper-main">
    <div class="container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>

            <div class="em-main-container em-col2-left-layout">
                <div class="row">
                    <div class="col-sm-24 em-col-main">
                        <div class="em-wrapper-area03"></div>
                        <div class="page-title">
                            <h1>Thông tin đặt hàng</h1>
                        </div>
                        <ol class="opc" id="checkoutSteps">
                            <li id="opc-billing" class="section allow">
                                <div class="em-box-02 step-title" data-toggle="collapse" data-target="#checkout-step-billing">
                                    <div class="title-box"> <span class="number">1</span>
                                        <h2>Thông tin đơn hàng</h2> <a href="#">Edit</a>
                                    </div>
                                </div>
                                <div id="checkout-step-billing " class="step a-item collapse in col-sm-24">
                                    <div class="col-sm-12">
                                        <div class="col-sm-24">
                                            <h4>Thông tin khách hàng</h4>
                                        </div>
<!--                                        <form id="co-billing-form"  class="col-sm-24">-->
                                            <?php
                                            $form = ActiveForm::begin(['action' =>['/fontend/orders/index'],'options' => [
                                                            'class' => 'col-sm-24'
                                            ]]);
                                            ?>
                                        <fieldset>
                                            <ul class="form-list">
                                                <li id="billing-new-address-form">
                                                    <fieldset>
                                                        <input type="hidden" name="billing[address_id]" value="215" id="billing:address_id" />
                                                        <ul>
                                                            <li class="fields">
                                                                <div class="customer-name-middlename">
                                                                    <div class="input-box name-firstname">
                                                                        <label class="required"><em>*</em>Họ tên </label>
                                                                        <div class="input-box">
<!--                                                                            <input type="text" id="billing-firstname" name="name" value="" title="Họ tên" maxlength="255" class="input-text required-entry" />-->
                                                                            <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>'input-text required-entry'])->label(false) ?>
                                                                        </div>
                                                                    </div>                                                                                                                                  
                                                                </div>
                                                            </li>                                                            
                                                            <li class="fields">
                                                                <div class="input-box">
                                                                    <label for="billing:telephone" class="required"><em>*</em>Địa chỉ nhận hàng</label>
                                                                    <div class="input-box">
<!--                                                                        <input type="text" name="adress" value="" title="Địa chỉ nhận hàng" class="input-text  required-entry" id="order-address" />-->
                                                                        <?= $form->field($model, 'address')->textInput(['maxlength' => true,'class'=>'input-text  required-entry'])->label(false) ?>
                                                                    </div>
                                                                </div>                                                                
                                                            </li>
                                                            <li class="fields">
                                                                <div class="input-box">
                                                                    <label for="billing:telephone" class="required"><em>*</em>Số điện thoại liên hệ</label>
                                                                    <div class="input-box">
<!--                                                                        <input type="text" name="phone" value="" title="Số điện thoại liên hệ" class="input-text  required-entry" id="order-telephone" />-->
                                                                        <?= $form->field($model, 'phone')->textInput(['maxlength' => true,'class'=>'input-text  required-entry'])->label(false) ?>
                                                                    </div>
                                                                </div>                                                                
                                                           </li>
                                                           <li class="fields">
                                                                <div class="input-box">
                                                                    <label for="billing:telephone" class="required">Email liên hệ</label>
                                                                    <div class="input-box">
<!--                                                                        <input type="text" name="email" value="" title="Email liên hệ" class="input-text  required-entry" id="order-email" />-->
                                                                        <?= $form->field($model, 'email')->textInput(['maxlength' => true,'class'=>'input-text  required-entry'])->label(false) ?>
                                                                    </div>
                                                                </div>                                                                
                                                           </li> 
                                                              <li class="no-display">
                                                                <input type="hidden" name="billing[save_in_address_book]" value="1" />
                                                            </li>
                                                        </ul>
<!--                                                        <div id="window-overlay" class="window-overlay" style="display:none;"></div>
                                                        <div id="remember-me-popup" class="remember-me-popup" style="display:none;">
                                                            <div class="remember-me-popup-head">
                                                                <h3>What's this?</h3> <a href="#" class="remember-me-popup-close" title="Close">Close</a>
                                                            </div>
                                                            <div class="remember-me-popup-body">
                                                                <p>Checking &quot;Remember Me&quot; will let you access your shopping cart on this computer when you are logged out</p>
                                                                <div class="remember-me-popup-close-button a-right"> <a href="#" class="remember-me-popup-close button" title="Close"><span>Close</span></a>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                    </fieldset>
                                                </li>
<!--                                                <li class="control">
                                                    <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" checked="checked" title="Ship to this address" class="radio" />
                                                    <label for="billing:use_for_shipping_yes">Ship to this address</label>
                                                </li>
                                                <li class="control">
                                                    <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_no" value="0" title="Ship to different address" class="radio" />
                                                    <label for="billing:use_for_shipping_no">Ship to different address</label>
                                                </li>-->
                                            </ul>
                                            <div class="buttons-set" id="billing-buttons-container">
                                                <p class="required">* Thông tin bắt buộc</p>
<!--                                                <button type="button" title="Continue" class="button"><span><span>Continue</span></span>
                                                </button>-->
                                                <div class="form-group">
                                                    <?= Html::submitButton($model->isNewRecord ? 'Lưu' : 'Update', ['class' => $model->isNewRecord ? 'button' : 'btn btn-primary']) ?>
                                                </div>
                                                <span class="please-wait" id="billing-please-wait" style="display:none;"> <img src="<?php echo Url::base('http') ?>/upload/images/opc-ajax-loader.html" alt="Loading next step..." title="Loading next step..." class="v-middle" /> Loading next step... </span>
                                            </div>
                                        </fieldset>
<!--                                    </form>-->
                                        <?php ActiveForm::end(); ?>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="col-sm-24">
                                            <h4>Phương thức vận chuyển</h4>
                                        </div>
                                    </div>
                                </div><!-- /#checkout-step-billing -->
                            </li><!-- /#opc-billing -->                                                                               
                        </ol>
                    </div>                    
                </div>
            </div><!-- /.em-main-container -->
        </div>
    </div>
</div>