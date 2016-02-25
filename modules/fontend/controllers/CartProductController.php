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

class CartController extends Controller
{
	public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
	public function actionIndex()
        { die("xx");
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
                //ko co gio hang trong cookie
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
                    ->where(['id' => $product_id, 'is_active' => Product::is_active])
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
            return $this->render('index', ['dataCart' => $listProduct]);
            }
        }

    public function actionAdd()
    { die("123");
//        $cookies = Yii::$app->response->cookies;
//        $cookies->remove('user_guest_pc');
        $post = Yii::$app->request->post();
        if ($post)
        { 
            $cart = Yii::$app->params['cart'];
            $id = $post['id'];
            $product_id = array(
                array('id' => $id, 'sl' => 1)
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
                        'status'=>'ok',
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
                        'status'=>'ok',
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
                      return json_encode(array(
                        'status'=>'false',
                         ));
                    } else
                    {
                        
                    $value = unserialize($getCookies);
						echo'<pre>'; var_dump($value); die;
                    if (is_array($value))
                        {
                        $check = false;
                        foreach ($value as $key => &$data)
                            {
                                if($data[]){

                                }
                            }
                        }
                    CookieHelper::addCookie('user_guest_pc', $value, 8600);
                    return true;
                    }
                }
            }
        }


}