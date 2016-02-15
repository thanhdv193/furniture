<?php

namespace app\modules\fontend\controllers;

use Yii;
use yii\web\Cookie;
use app\models\Product;
use app\components\helpers\CookieHelper;

class CartController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $product = array();
        $product_sl = array();
        $product_id = array();
        $cookies = Yii::$app->request->cookies;
        if ($cookies->has('user_guest_pc'))
        {
            $cookieValue = $cookies->getValue('user_guest_pc', null);
            if ($cookieValue != null)
            {
                $product = unserialize($cookieValue);
            }
        }
//        echo'<pre>';
//        var_dump($product);
//        die;
        foreach ($product as $value)
        {
            $product_sl[$value['id']] = $value;
            $product_id[] = $value['id'];
        }
        $listCart = Product::find()
                ->where(['product_id' => $product_id, 'active' => 1])
                ->asArray()
                ->all();
        foreach ($listCart as &$value)
        {
            if ($value['product_id'] == $product_sl[$value['product_id']]['id'])
            {
                $value['product_sl'] = $product_sl[$value['product_id']]['sl'];
                $value['money_all'] = $value['product_sl'] * (int) $value['price'];
            }
        }

        return $this->render('index', ['data' => $listCart]);
        //return $this->renderPartial('index', ['data' => $listCart]);
    }

    public function actionAdd()
    {
//        $cookies = Yii::$app->response->cookies;
//        $cookies->remove('user_guest_pc');
        $post = Yii::$app->request->post();
        if ($post)
        {
            $id = $post['product_id'];
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
                $getCookies = CookieHelper::getCookie('user_guest_pc');
                if ($getCookies == false)
                {
                    CookieHelper::addCookie('user_guest_pc', $product_id, 8600);
                    return true;
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
                    CookieHelper::addCookie('user_guest_pc', $value, 8600);
                    return true;
                }
            }
        }
    }

    public function actionDeleteCart()
    {
        $post = Yii::$app->request->post();
        if ($post)
        {
            $id = $post['product_id'];
            $type = $post['type'];
            if ($type == 'delete')
            {
                if (Yii::$app->user->isGuest == false)
                { // user ->save db
                    echo Yii::$app->user->identity->username;
                    die();
                } else
                {
                    //guest ->save cookie
                    $getCookies = CookieHelper::getCookie('user_guest_pc');
                    if ($getCookies == false)
                    {
                        
                    } else
                    {
                        $value = unserialize($getCookies);

                        if (is_array($value))
                        {
                            foreach ($value as $key => &$data)
                            {
                                if ($data['id'] == $id)
                                {
                                    unset($value[$key]);
                                }
                            }
                            CookieHelper::addCookie('user_guest_pc', $value, 8600);
                        }
                    }
                }
            }
        }
    }

    public function actionProcessCart()
    {
        $post = Yii::$app->request->post();
        if ($post)
        {
            $cart = $post['cart'];

            if (Yii::$app->user->isGuest == false)
            { // user ->save db
                echo Yii::$app->user->identity->username;
                die();
            } else
            {
                // guest -> save cookie
                $getCookies = CookieHelper::getCookie('user_guest_pc');
                if ($getCookies == false)
                {
//                    CookieHelper::addCookie('user_guest_pc', $product_id, 600);
                    return true;
                } else
                {
                    $value = unserialize($getCookies);
                    if (is_array($value))
                    {
                        $check = false;
                        foreach ($value as $key => &$data)
                        {
                            if (isset($cart[$data['id']]))
                            {
                                $data['sl'] = (int) $cart[$data['id']]['qty'];
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
