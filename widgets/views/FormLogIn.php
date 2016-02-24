<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<?php if($isGuest == false){ ?>
    <a href="#" class="user-account" id="link-login" title="<?php echo $model['username'] ?>"><?php echo $model['username'] ?></a>
    <div class="em-account" id="em-account-login-form" style="display: none;">
        <div class="block-content">
            <ul class="form-list">
                <li>
                    <a href="/site/logout" data-method="post">Đăng xuất (<?php echo $model['username'] ?>)</a>
                </li>
            </ul>
        </div>
        
    </div>
<?php } else {?>        
    <a href="login.html" class="link-account" id="link-login" title="Đăng nhập">Đăng nhập</a>
    <div id="form-login">
        <div class="em-account" id="em-account-login-form" style="display: none;">
        <?php $form = ActiveForm::begin(['action' =>['/site/login'],'id' => 'login-form']);?>        
        <div class="block-content">
            <ul class="form-list">
                <li>
                    <label for="mini-login">Tên tài khoản<em>*</em></label>
                    <?= $form->field($model, 'username')->textInput(['maxlength' => 255, 'class' => 'input-text required-entry validate-email'])->label(false) ?>
                </li>
                <li>
                    <label for="mini-password">Mật khẩu<em>*</em></label>
                    <?= $form->field($model, 'password')->passwordInput()->textInput(['maxlength' => 255, 'class' => 'input-text required-entry validate-password'])->label(false) ?>
                </li>
                <li>
                    <?=
                    $form->field($model, 'rememberMe', [
                        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ])->checkbox()
                    ?>
                </li>
                <li>
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Đăng nhập', ['class' => 'login button btn btn-primary', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                </li>
            </ul>                               
            <div class="action-forgot">
                <div class="login_forgotpassword">
                    <p><a href="#">Quên mật khẩu?</a>
                    </p>
                    <p><span>Don't have an account?</span><a class="create-account-link-wishlist" href="h.html#" title="Sign Up">Sign Up</a>
                    </p>
                </div>                
            </div>    
        </div>        
    <?php ActiveForm::end(); ?>
    </div>
    </div>
    
<?php }?>
