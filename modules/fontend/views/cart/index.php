<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\components\utils\TextUtils;
use app\components\helpers\HelperLink;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Giỏ hàng';
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
                        <li class="cms_page"> <strong>Giỏ hàng</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(isset($dataCart) && $dataCart != null){ ?>
    
<div class="em-wrapper-main">
    <div class="container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>
            <div class="em-main-container em-col1-layout">
                <div class="row">
                    <div class="em-col-main col-sm-24">
                        <div class="cart">
                            <div class="page-title title-buttons">
                                <h1>Giỏ hàng</h1>
                                <ul class="checkout-types">
                                    <li>
                                        <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout"><span><span>Proceed to Checkout</span></span>
                                        </button>
                                    </li>
                                </ul>
                            </div><!-- /.page-title -->
                            <form method="post">
                                <input name="form_key" type="hidden" value="inYgLvzSpOOWWVoP" />
                                <fieldset>
                                    <table id="shopping-cart-table" class="data-table cart-table">
                                        <thead>
                                            <tr class="em-block-title">
                                                <th><span class="nobr">Ảnh sản phẩm</span>
                                                </th>
                                                <th><span class="nobr">Tên sản phẩm</span></th>                                                
                                                
                                                <th class="a-center" colspan="1"><span class="nobr">Giá</span>
                                                </th>
                                                <th class="a-center">Số lượng</th>
                                                <th class="a-center last" colspan="1">Tổng giá</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <td colspan="7" class="a-right">
                                                    <button type="button" title="Tiếp tục mua hàng" class="button btn-continue"><span><span>Continue Shopping</span></span>
                                                    </button>                                                    
                                                    <button type="submit" name="update_cart_action" value="empty_cart" title="Clear Shopping Cart" class="button btn-empty" id="empty_cart_button"><span><span>Clear Shopping Cart</span></span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach($dataCart as $value){ ?>
                                            <tr class="first tr-p-<?php echo $value['id'] ?>">
                                                <td>
                                                    <div class="cart-product"><a href="#" title="Xóa sản phẩm" data-value="<?php echo $value['id'] ?>" class="btn-remove btn-remove2">Remove item</a>
                                                        <a href="<?php echo HelperLink::rewriteUrl($value['id'], $value['title'], Yii::$app->params['urlSite']['detail']) ?>" title="<?php echo $value['title'] ?>" class="product-image"><img src="<?php Url::base('http')?>/<?php echo $value['img_path'] ?>/<?php echo $value['img_name'] ?>" style="height:90px;width:90px;" alt="<?php echo $value['title'] ?>" />
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h2 class="product-name"> <a href="<?php echo HelperLink::rewriteUrl($value['id'], $value['title'], Yii::$app->params['urlSite']['detail']) ?>"> <?php echo $value['title'] ?></a></h2>                                                    
                                                </td>                                             
                                                <td class="a-center"> <span class="cart-price"> <span data-value="<?= $value['price'] ?>" class="price-<?php echo $value['id'] ?> price"><?= TextUtils::numberFormat($value['price']) ?>đ</span> </span>
                                                </td>
                                                <td class="a-center">
                                                    <div class="qty_cart">
                                                        <div class="qty-ctl">
                                                            <button title="Tăng số lượng" onclick="qtyDown(<?php echo $value['id'] ?>);  return false;" class="decrease">decrease</button>
                                                        </div>
                                                        <input type="text" id="cart-<?php echo $value['id'] ?>-qty" data-id="<?php echo $value['id'] ?>" name="cart[<?php echo $value['id'] ?>][qty]" value="<?php echo $value['product_sl'] ?>" size="4" title="Số lượng" class="input-text qty qty-product" maxlength="9" />                                                        
                                                        <div class="qty-ctl">
                                                            <button title="Giảm số lượng" onclick="qtyUp(<?php echo $value['id'] ?>);  return false;" class="increase">increase</button>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                <td class="a-center last"> <span class="cart-price"> <span class="price-all-<?php echo $value['id'] ?> price"><?= TextUtils::numberFormat($value['money_all']) ?>đ</span> </span>
                                                </td>
                                            </tr>
                                            <?php } ?>     
                                                                                    
                                        </tbody>
                                    </table>
                                </fieldset>
                            </form><!-- /form -->
                            <div class="cart-collaterals row">                              
                                <div class="last totals col-md-8 col-sm-24">
                                    <div class="em-box-cart">
                                        <h2>Order Total</h2>
                                        <div class="em-box">
                                            <table id="shopping-cart-totals-table">
                                                <col />
                                                <col style="width: 1%;" />
                                                <tfoot>
                                                    <tr>
                                                        <td style="" class="a-right" colspan="1"> <strong>Grand Total</strong>
                                                        </td>
                                                        <td style="" class="a-right"> <strong><span class="price">$9.70</span></strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td style="" class="a-right" colspan="1"> Subtotal</td>
                                                        <td style="" class="a-right"> <span class="price">$9.70</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <ul class="checkout-types">
                                                <li>
                                                    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout"><span><span>Proceed to Checkout</span></span>
                                                    </button>
                                                </li>
                                                <li><a href="checkout.html" title="Checkout with Multiple Addresses">Checkout with Multiple Addresses</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.em-box-cart -->
                                </div><!-- /.last -->
                            </div><!-- /.cart-collaterals -->                            
                        </div>
                    </div>
                </div>
            </div><!-- /.em-main-container -->
        </div>
    </div>
</div><!-- /.em-wrapper-main -->
<?php  } else { ?>
        <div class="page-title title-buttons">
        <h1>Bạn không có sản phẩm nào trong giỏ hàng</h1>        
    </div>
<?php }?>
<script type="text/javascript">
            function qtyDown(id) { 
                var qty_el = document.getElementById('cart-' + id + '-qty');
                var qty = qty_el.value;
                if (!isNaN(qty) && qty > 1) {
                    qty_el.value--;
                }
                return false;
            }

            function qtyUp(id) {
                var qty_el = document.getElementById('cart-' + id + '-qty');
                var qty = qty_el.value;
                if (!isNaN(qty)) {
                    qty_el.value++;
                }
                return false;
            }
        </script>
