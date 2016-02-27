<?php

namespace app\modules\fontend\controllers;

use yii\web\Controller;
use app\models\Product;
use app\components\helpers\ImageProduct;

class HomeController extends Controller
{
    public function actionIndex()
    {    	
        $listProduct = Product::find()->where(['product_group_id'=>11,'is_active'=>1])->asArray()->all();
        //ImageProduct::Image(3723, 0, 2);
        //echo'<pre>'; var_dump($listProduct); die;
        return $this->render('index',['listProduct'=>$listProduct]);
    }
    public function actionContact()
    {    	       
        return $this->render('contact',['data'=>null]);
    }
}
