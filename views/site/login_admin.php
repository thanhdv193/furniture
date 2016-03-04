<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Đăng nhập quản trị';
?>
<div class="sign-overlay"></div>
<div class="signpanel"></div>

<div class="panel signin">
    <div class="panel-heading">
        <h1>Quirk</h1>
        <h4 class="panel-title">Welcome! Please signin.</h4>
    </div>
    <div class="panel-body">
        <button class="btn btn-primary btn-quirk btn-fb btn-block">Connect with Facebook</button>
        <div class="or-css">hoặc</div>
        <?php $form = ActiveForm::begin(['action' =>['/site/login-admin'],'id' => 'login-form']);?>        
            <div class="form-group mb10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>         
                    <input type="text" id="loginform-username" class="form-control" name="LoginForm[username]" maxlength="255" placeholder="Nhập tên đăng nhập">
                    <p class="help-block help-block-error"></p>
                    
                </div>
            </div>
            <div class="form-group nomargin">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>                    
                    <input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" placeholder="Nhập mật khẩu">
                    
                </div>
            </div>
            <div><a href="#" class="forgot">Quên mật khẩu ?</a></div>
            <div class="form-group">
                <button class="btn btn-success btn-quirk btn-block">Đăng nhập</button>
            </div>        
        <?php ActiveForm::end(); ?>
        <hr class="invisible">
        <div class="form-group">
<!--            <a href="signup.html" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Not a member? Sign up now!</a>-->
        </div>
    </div>
</div><!-- panel -->
