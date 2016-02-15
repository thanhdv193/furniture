<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\MraUser;
use yii\web\Response;
use app\widgets\Yii;
use yii\helpers;

class HeaderWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
//
//        $userModel = new MraUser();
//
//        if (!\Yii::$app->user->isGuest) {
////            $user = $userModel->getUserByUserId(Yii::$app->user->id);
////            return $this->render('Header',['user'=>$user]);
//
//            $user = $userModel->getUserByUserId(578153);
//            return $this->render('Header',['user'=>$user]);
//
//        } else {
        return $this->render('Header');
        // }
    }

}
