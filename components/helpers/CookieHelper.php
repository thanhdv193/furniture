<?php

namespace app\components\helpers;


use Yii;

class CookieHelper
{

    public static function addCookie($name, $value, $expire)
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => $name,
            'value' => serialize($value),
            'expire' => time() + (int) $expire,
        ]));
    }

    public static function getCookie($name)
    {
        $cookies = Yii::$app->request->cookies;
        if ($cookies->has($name))
        {
            $cookieValue = $cookies->getValue($name, null);
            if($cookieValue == null)
            {
                return false;
            }
            else{
                return $cookieValue;
            }
        }else{
            return false;
        }
    }
    public static function deleCookie($name)
    {
        $cookies = Yii::$app->response->cookies;
        $cookies->remove($name);
        unset($cookies[$name]);
    }

}
