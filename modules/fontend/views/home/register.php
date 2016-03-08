<?php

use yii\helpers;
use yii\helpers\Url;
use app\widgets\WrapperBannersWidget;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng ký tài khoản';
?>
<div class="wrapper-breadcrums">
    <div class="col-sm-24">
        <div class="row">
            <div class="col-sm-24">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="<?php echo Url::base('http') ?>" title="Trang chủ"><span >Trang chủ</span></a> <span class="separator">/ </span>
                        </li>
                        <li class="cms_page"> <strong>Đăng ký tài khoản</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.wrapper-breadcrums -->

<?php // WrapperBannersWidget::widget() ?>
<div class="em-wrapper-main">
    <div class="container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>
            <div class="em-main-container em-col1-layout">
                <div class="row">
                    <div class="em-col-main col-sm-24">
                        <div class="account-create">
                            <div class="page-title">
                                <h1>Đăng ký tài khoản</h1>
                            </div>
                            <?php $form = ActiveForm::begin(); ?>                               
                            <div class="fieldset">
                                <input type="hidden" name="success_url" value="" />
                                <input type="hidden" name="error_url" value="" />
                                <h2 class="legend">Thông tin đăng ký</h2>
                                <ul class="form-list">
                                    <li class="row">
                                        <div class="col-sm-12">
                                            <label for="firstname" class="required"><em>*</em>Tên tài khoản</label>
                                            <div class="input-box">
                                                <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label(false) ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="middlename">Họ tên</label>
                                            <div class="input-box">
                                                <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label(false) ?> 
                                            </div>
                                        </div> 
                                    </li>
                                    <li class="row">
                                        <div class="col-sm-12">
                                            <label for="lastname" class="required"><em>*</em>Mật khẩu</label>
                                            <div class="input-box">
                                                <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true])->label(false) ?>    
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <label for="lastname" class="required"><em>*</em>Ngày sinh</label>
                                            <div class="input-box">
                                                <?php $model->birthday = date("d/m/Y", $model->birthday); ?>
                                                <?= $form->field($model, 'birthday')->textInput(array('class' => 'form-control datepicker', 'data-date-format' => 'mm/dd/yyyy'))->label(false) ?>
                                            </div>
                                        </div>
                                        </liv>
                                    <li class="row">
                                        <div class="col-sm-12">
                                            <label for="lastname" class="required"><em>*</em>Nhập lại mật khẩu</label>
                                            <div class="input-box">
                                                <?= $form->field($model, 'password_repeat')->passwordInput(['class' => 'txt_password form-control'])->label(false) ?> 
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="lastname" class="required"><em>*</em>Email</label>
                                            <div class="input-box">
                                                <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label(false) ?>
                                            </div>
                                        </div>
                                        </liv>
                                    <li class="row">
                                        <div class="col-sm-12">
                                            <label for="lastname" class="required"><em>*</em>Địa chỉ</label>
                                            <div class="input-box">
                                                <?= $form->field($model, 'address')->textInput(['maxlength' => true])->label(false) ?>    
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="lastname" class="required"><em>*</em>Giới tính</label>
                                            <div class="input-box">
                                                <?= $form->field($model, 'gender')->dropDownList(['nam' => 'Nam', 'Nu' => 'Nữ', 'bd' => 'Không xác định'], ['class' => 'txt_gender form-control'])->label(false); ?>    
                                            </div>
                                        </div>
                                        </liv>                                    
                                    <li class="col-sm-24 btn-submit">                                        

                                        <?= Html::submitButton('Trở lại', ['class' => 'back button btn btn-primary', 'name' => 'login-button']) ?>     
                                        <?= Html::submitButton('Đăng ký', ['class' => 'register button btn btn-primary', 'name' => 'login-button']) ?>
                                    </li>

                                </ul>
                            </div>                                                            
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.em-wrapper-main -->