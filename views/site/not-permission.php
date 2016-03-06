<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Không thể truy cập';
?>
<div class="sign-overlay"></div>
<div class="signpanel"></div>

<div class="panel signin">
    <div class="panel-heading">
        <h1>Quirk</h1>
        <h4 class="panel-title">Bạn không có quyền vào chuyên mục này !</h4>
    </div>
    <div class="panel-body">
        <a href="<?php echo $url ?>" class="btn btn-primary btn-quirk btn-fb btn-block">Trở lại</a>                
    </div>
</div><!-- panel -->
