<?php

namespace app\modules\fontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Product;
use app\components\helpers\ImageProduct;
use app\models\Cart;
use app\components\helpers\CookieHelper;
use app\models\About;

class HomeController extends Controller
{
    public function actionIndex()
    {    	
        $listProduct = Product::find()
                ->select(['product_photo.id as photo_id','product_photo.*','product.*'])
                ->innerJoin('product_photo','product_photo.product_id = product.id')
                ->where(['product.product_group_id'=>11,'product.is_active'=>  Product::is_active])
                ->offset(0)
                ->limit(8)
                ->asArray()->all();
        //ImageProduct::Image(3723, 0, 2);
        //echo'<pre>'; var_dump($listProduct); die;
        return $this->render('index',['listProduct'=>$listProduct]);
    }
    public function actionContact()
    {    	     
        return $this->render('contact',['data'=>null]);
    }
    public function actionAbout()
    {    	     
        $about = About::find()
                ->asArray()
                ->one();
        //echo'<pre>'; var_dump($about); die;
        return $this->render('about',['data'=>$about]);
    }
    public function actionCheckCart()
    {         
        if (Yii::$app->request->post())
        {
            if (Yii::$app->user->isGuest == false)
            {
                $countCart = Cart::find()
                        ->where(['user_id' => Yii::$app->user->id])
                        ->count();

                return json_encode(array(
                    'count' => $countCart,
                ));
            } else
            {
                $cart = Yii::$app->params['cart'];
                $getCookies = CookieHelper::getCookie($cart);
                if ($getCookies == false)
                {
                    //cart null
                    return json_encode(array(
                        'count' => 0,
                    ));
                } else
                {
                    $product = unserialize($getCookies);
                    $countCart = count($product);
                    return json_encode(array(
                        'count' => $countCart,
                    ));
                }
            }
        }
    }
}
