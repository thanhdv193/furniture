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
        if (Yii::$app->user->isGuest == false)
        { // user ->save db
            echo Yii::$app->user->identity->username;
            die();
        } else
        {
            $product = array();
            $product_sl = array();
            $product_id = array();
            $cart = Yii::$app->params['cart'];
            //$cookies = Yii::$app->request->cookies;
            $getCookies = CookieHelper::getCookie($cart);

            if ($getCookies == false)
            {
                $listProduct = null;
                return $this->render('index', ['dataCart' => $listProduct,'status'=>true]);
                
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
                    ->select(['product_photo.id as photo_id','product_photo.filename as img_name','product_photo.image_path as img_path','product.*'])
                    ->where(['product.id' => $product_id, 'product.is_active' => Product::is_active])
                    ->innerJoin('product_photo', 'product.id = product_photo.product_id')
                    ->asArray()
                    ->all();
            
            //echo'<pre>'; var_dump($listProduct); die;
            foreach ($listProduct as &$value)
                {
                if ($value['id'] == $product_sl[$value['id']]['id'])
                {
                    $value['product_sl'] = $product_sl[$value['id']]['sl'];
                    $value['money_all'] = $value['product_sl'] * (int) $value['price'];
                }
                }
              //  echo'<pre>'; var_dump($listProduct); die;
            return $this->render('index', ['dataCart' => $listProduct,'status'=>true]);
        }
    }

    public function actionAdd()
    {      
        $post = Yii::$app->request->post();
        if ($post)
        {
            $cart = Yii::$app->params['cart'];
            $id = $post['id'];
            $product_id = array(
                array('id' => $id, 'sl' => Cart::is_upCart)
            );
            if (Yii::$app->user->isGuest == false)
            { // user ->save db
                echo Yii::$app->user->identity->username;
                die();
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
