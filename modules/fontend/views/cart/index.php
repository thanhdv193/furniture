<?php
use app\components\helpers\SystemHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->registerJsFile(Url::base('').'/js/product/process_cart.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Your shopping cart</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Shopping Cart Summary</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-order">
            <ul class="step">
                <li class="current-step"><span>01. Summary</span></li>
<!--                <li><span>02. Sign in</span></li>-->
                <li><span>02. Address</span></li>
                <li><span>03. Shipping</span></li>
                <li><span>04. Payment</span></li>
            </ul>
            <div class="heading-counter warning">Your shopping cart contains:
                <span>1 Product</span>
            </div>
            <?php $form = ActiveForm::begin(['action' => ['cart/process-cart'], 'method' => 'post']); ?>                    
            <div class="order-detail-content">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Sản phẩm</th>
                            <th>Mô tả</th>
                            <th>Avail.</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Tổng</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $value){ ?>
                        <tr class="tr-<?php echo $value['product_id']?>">
                            <td class="cart_product">
                                <a href="#"><img src="<?php $array = app\models\Image::find()->where(['object_id' => $value['product_id'],'object_type'=>'product'])->one();?><?php echo '/'.$array['image_path']. '' .$array['filename'] ?>" alt="<?php echo $value['name'] ?>"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#"><?php echo $value['name'] ?></a></p>
                                <small class="cart_ref">Mã sản phẩm : <?php echo $value['product_id'] ?></small><br>
                                <small><a href="#">Color : Beige</a></small><br>   
                                <small><a href="#">Size : S</a></small>
                            </td>
                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
                            <td class="price"><span id="p-<?php echo $value['product_id']?>"><?php echo SystemHelper::product_price($value['price']) ?></span></td>
                            <td class="qty">
                                <input class="form-control input-sm input_price" maxlength="4" name="cart[<?php echo $value['product_id']?>][qty]" type="text" value="<?php echo $value['product_sl'] ?>">
<!--                                <a href="#"><i class="fa fa-caret-up"></i></a>
                                <a href="#"><i class="fa fa-caret-down"></i></a>-->
                            </td>
                            <td class="price">
                                <span id="p-final-<?php echo $value['product_id']?>"><?php echo SystemHelper::product_price($value['money_all']) ?></span>
                            </td>
                            <td class="action">
                                <a href="#" class="delete-product" data-value="<?php echo $value['product_id'] ?>" title="Xóa sản phẩm">Delete item</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">Total products (tax incl.)</td>
                            <td colspan="2">122.38 €</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong>122.38 €</strong></td>
                        </tr>
                    </tfoot>    
                </table>
                <div class="cart_navigation">
                    <a class="prev-btn" href="/danh-muc/thanh-2-1">Tiếp tục mua hàng</a>
                    <a class="next-btn" href="#">Xử lý đơn hàng</a>
                    <button type="submit" id="btn-send-contact" class="next-btn btn">Xử lý đơn hàng</button>
                </div>
            </div>
            <?php ActiveForm::end(); ?>    
        </div>
    </div>
</div>