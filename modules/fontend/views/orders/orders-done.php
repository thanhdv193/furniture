<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\Orders;
use app\widgets\WrapperBannersWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Đơn hàng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper-breadcrums">
    <div class="col-sm-24">
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
<?= WrapperBannersWidget::widget() ?>
<div class="em-wrapper-main">
    <div class="container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>

            <div class="em-main-container em-col2-left-layout">
                <div class="row">
                    <div class="col-sm-24 em-col-main">
                        <div class="em-wrapper-area03"></div>
                        <div class="page-title">
                         <?php   if($status == Orders::order_success) { ?>
                            <h1>Bạn đã đặt hàng thành công, chúng tôi sẽ liện hệ với bạn để xác thực đơn hàng!</h1>
                         <?php }else{ ?>
                            <h1>Đặt hàng không thành công, vui lòng thử lại!</h1>
                         <?php } ?>                            
                        </div>
                        
                    </div>                    
                </div>
            </div><!-- /.em-main-container -->
        </div>
    </div>
</div>