<?php

namespace app\modules\fontend\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex($id)
    {
        var_dump($id);die;
    	$this->layout ='main';
        return $this->render('index');
    }
}
