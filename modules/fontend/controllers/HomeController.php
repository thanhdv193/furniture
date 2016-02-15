<?php

namespace app\modules\fontend\controllers;

use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
    	
        return $this->render('index');
    }
}
