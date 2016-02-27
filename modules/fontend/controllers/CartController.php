<?php

namespace app\modules\fontend\controllers;

use Yii;
use app\models\Cart;
use app\models\CartSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\helpers\CookieHelper;
use app\models\Product;
use app\models\ProductPhoto;

class CartController extends Controller
{

    public function actionIndex()
    {   
        $product_sl = array();
        $product_id = array();
        if (Yii::$app->user->isGuest == false)
        {
            $user_id = (int) Yii::$app->user->id;
            $listCart = Cart::find()
                    ->select(['cart.quantity as product_sl', 'product_photo.id as photo_id', 'product_photo.filename as img_name', 'product_photo.image_path as img_path', 'cart.*', 'product.*'])
                    ->innerJoin('product_photo', 'cart.product_id = product_photo.product_id')
                    ->innerJoin('product', 'cart.product_id = product.id')
                    ->where(['cart.user_id' => $user_id])
                    ->asArray()
                    ->all();
            foreach ($listCart as &$value)
                {                
                    $value['money_all'] = $value['product_sl'] * (int) $value['price'];                
                }              
                return $this->render('index', ['dataCart' => $listCart, 'status' => true]);            
        } else
        {
            $product = array();
            $cart = Yii::$app->params['cart'];
            //$cookies = Yii::$app->request->cookies;
            $getCookies = CookieHelper::getCookie($cart);

            if ($getCookies == false)
            {
                $listProduct = null;
                return $this->render('index', ['dataCart' => $listProduct, 'status' => true]);
            } else
            {
                $product = unserialize($getCookies);
            }
            foreach ($product as $value)
                {
                $product_sl[$value['id']] = $value;
                $product_id[] = $value['id'];
                }
            $listProduct = Product::find()
                    ->select(['product_photo.id as photo_id', 'product_photo.filename as img_name', 'product_photo.image_path as img_path', 'product.*'])
                    ->innerJoin('product_photo', 'product.id = product_photo.product_id')
                    ->where(['product.id' => $product_id, 'product.is_active' => Product::is_active])
                    ->asArray()
                    ->all();

            foreach ($listProduct as &$value)
                {
                if ($value['id'] == $product_sl[$value['id']]['id'])
                {
                    $value['product_sl'] = $product_sl[$value['id']]['sl'];
                    $value['money_all'] = $value['product_sl'] * (int) $value['price'];
                }
                }
            //  echo'<pre>'; var_dump($listProduct); die;
            return $this->render('index', ['dataCart' => $listProduct, 'status' => true]);
        }
    }

    public function actionAdd()
    {      
        $post = Yii::$app->request->post();
        if ($post)
        {            
            $id = $post['id'];
            $product_id = array(
                array('id' => $id, 'sl' => Cart::is_upCart)
            );
            if (Yii::$app->user->isGuest == false)
            {                     
                $checkCart = false; 
                $cart = Cart::find()
                            ->where(['user_id'=>Yii::$app->user->id,'product_id'=>$id])
                            ->one();
                if($cart == null)
                {
                    $modelCart= new Cart();
                    $modelCart->product_id = (int) $id;
                    $modelCart->user_id = Yii::$app->user->id;
                    $modelCart->user_name = Yii::$app->user->identity->username;
                    $modelCart->create_date = time();
                    $modelCart->quantity = Cart::is_upCart;
                    if($modelCart->save())
                    {
                        $checkCart = true;
                    }
                }else{
                    $cart->quantity = $cart->quantity + Cart::is_upCart;                    
                    if($cart->save())
                    {
                        $checkCart = true;
                    }
                }                                                              
                if($checkCart == true)
                {
                    return json_encode(array(
                        'status' => 'ok',
                    ));
                }else{
                    return json_encode(array(
                        'status' => 'false',
                    ));
                }
            } else
            {
                // guest -> save cookie
                $getCookies = CookieHelper::getCookie($cart);
                if ($getCookies == false)
                {
                    CookieHelper::addCookie($cart, $product_id, 8600);
                    return json_encode(array(
                        'status' => 'ok',
                    ));
                } else
                {
                    $value = unserialize($getCookies);

                    if (is_array($value))
                    {
                        $check = false;
                        foreach ($value as &$data)
                            {
                            if ($data['id'] == $id)
                            {
                                $check = true;
                                $data['sl'] = $data['sl'] + 1;
                            }
                            }
                        if ($check == false)
                        {
                            array_push($value, array('id' => $id, 'sl' => 1));
                        }
                    }
                    CookieHelper::addCookie($cart, $value, 8600);
                    return json_encode(array(
                        'status' => 'ok',
                    ));
                }
            }
        }
    }

    public function actionUpdateCart()
    {
        $post = Yii::$app->request->post();
        if ($post)
        {
            $product_id = $post['id'];
            $qty = $post['qty'];
            if (Yii::$app->user->isGuest == false)
            { 
                $checkCart = false; 
                $cart = Cart::find()
                            ->where(['user_id'=>Yii::$app->user->id,'product_id'=>$product_id])
                            ->one();
                if($cart != null)
                {
                    $cart->quantity = (int)$qty;                    
                    if($cart->save())
                    {
                        $checkCart = true;
                    }
//                    $modelCart= new Cart();
//                    $modelCart->product_id = (int) $product_id;
//                    $modelCart->user_id = Yii::$app->user->id;
//                    $modelCart->user_name = Yii::$app->user->identity->username;
//                    $modelCart->create_date = time();
//                    $modelCart->quantity = Cart::is_upCart;
//                    if($modelCart->save())
//                    {
//                        $checkCart = true;
//                    }
                }                                                            
                if($checkCart == true)
                {
                    return json_encode(array(
                        'status' => 'ok',
                    ));
                }else{
                    return json_encode(array(
                        'status' => 'false',
                    ));
                }
            } else
            {
                // guest -> save cookie
                $cart = Yii::$app->params['cart'];
                $getCookies = CookieHelper::getCookie($cart);
                if ($getCookies == false)
                {
//                    CookieHelper::addCookie('user_guest_pc', $product_id, 600);
//                    return json_encode(array(
//                        'status' => 'false',
//                    ));
                } else
                {

                    $value = unserialize($getCookies);
                    if (is_array($value))
                    {
                        //$check = false;
                        foreach ($value as $key => &$data)
                            { 
                                if ($data['id'] == (int)$product_id)
                                {                                        
                                        if($data['sl'] != (int)$qty){
                                            $data['sl'] = (int)$qty;
                                        }
                                }
                            }
                            CookieHelper::addCookie($cart, $value, 8600);
                            return json_encode(array(
                                'status' => 'ok',
                            ));
                    }                                        
                }
            }
        }
    }
    public function actionDeleteCart()
    {
        $post = Yii::$app->request->post();
        if ($post)
        {
            $product_id = $post['id'];
            //$qty = $post['qty'];
            if (Yii::$app->user->isGuest == false)
            { // user ->save db
                echo Yii::$app->user->identity->username;
                die();
            } else
            {
                // guest -> save cookie
                $cart = Yii::$app->params['cart'];
                $getCookies = CookieHelper::getCookie($cart);
                if ($getCookies == false)
                {
//                    CookieHelper::addCookie('user_guest_pc', $product_id, 600);
//                    return json_encode(array(
//                        'status' => 'false',
//                    ));
                } else
                {

                    $value = unserialize($getCookies);
                    if (is_array($value))
                    {                        
                        //$check = false;
                        foreach ($value as $key => $data)
                            { 
                                if ($data['id'] == $product_id)
                                {                                      
                                        unset($value[$key]);                                        
                                }
                            }
                        $count = count($value);
                        if($count == 0)
                        {
                            CookieHelper::deleCookie($cart);
                            return json_encode(array(
                                'status' => 'ok',
                            ));
                        }else{
                            CookieHelper::addCookie($cart, $value, 8600);
                            return json_encode(array(
                                'status' => 'ok',
                            ));
                        }                        
                            
                    }                                        
                }
            }
        }
    }

}
