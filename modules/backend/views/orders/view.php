<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\ProductPhoto;
use yii\helpers\Url;
use app\components\utils\TextUtils;
use app\models\Orders;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */

$this->title = "Chi tiết đơn hàng của khách hàng :" . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách đơn hàng', 'url' => ['?id=3']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Sửa', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Xóa', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Bạn có chắc muốn xóa đơn hàng của : ' . $model->name,
                    'method' => 'post',
                ],
            ])
            ?>
        </p>
    </div>
    <div class="panel-body">
        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                [
                    'attribute' => 'user_id',
                    'format' => 'raw',
                    'value' => $model->user_id == 0 ? "Khách vãng lai" : "Khách có tài khoản"
                ],
                'name',
                'address',
                'email:email',
                'phone',
                [
                    'attribute' => 'create_date',
                    'format' => 'raw',
                    'value' => Yii::$app->formatter->asDatetime($model->create_date, 'php:h:i:s d/m/Y'),
                ],
                //'cust_note',
                'is_process',
                [
                    'attribute' => 'is_process',
                    'format' => 'raw',
                    'value' => $model->is_process == Orders::order_process ? "Chưa xử lý": $model->is_process == Orders::order_process_done ? "Đã xử lý":"Đang chờ",
                ],
            ],
        ])
        ?>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-primary nomargin">
                <thead>
                    <tr>                       
                        <th class="text-center">Mã sản phẩm</th>
                        <th class="text-center">Ảnh sản phẩm</th>
                        <th class="text-center">Tên sản phẩm</th>
                        <th class="text-center">Đơn giá</th>
                        <th class="text-center">Số lượng</th>
                        <th class="text-center">Thành tiền tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orderDetail as $value) { ?>
                    <tr>                  
                        <td class="text-center"><?php echo $value['product_id'] ?></td>
                        <td class="text-center"><img src="<?php echo Url::base('http').'/'.$value['image_path'].$value['filename']?>" alt="" style="width:100px;height: 100px;"></td>
                        <td class="text-center"><?php echo $value['product_name'] ?></td>
                        <td class="text-center"><?= TextUtils::numberFormat($value['price']) ?>đ</td>
                        <td class="text-center"><?php echo $value['quantity'] ?></td>
                        <td class="text-center"><?= TextUtils::numberFormat($value['allPrice']) ?>đ</td>
                    </tr>    
                    <?php } ?>
                    <tr>
                        <td>Tổng tiền đơn hàng</td>
                        <td colspan="5" style="color: red;"><?= TextUtils::numberFormat($totalMoney) ?>đ</td>
                    </tr>
                </tbody>
            </table>
        </div><!-- table-responsive -->
    </div>
</div>

