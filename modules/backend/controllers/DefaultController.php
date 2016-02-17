<?php

namespace app\modules\backend\controllers;

use Yii;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {        
        return $this->render('index');
    }
    
    public function actionUpload()
    {
        $post = Yii::$app->request->post();
        if ($post)
        {
            
        }
        
        $url ="http://cantholink.com/menu/upload/vi-toi-dep-trai--14556095307851.jpg";
        return json_encode($url);
    }
}
