<?php

namespace app\modules\fontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\Product;
use app\models\ProductSearch;
use app\components\helpers\ImageProduct;
use app\models\Cart;
use app\components\helpers\CookieHelper;
use app\models\About;
use app\models\User;
use app\models\LoginForm;
use yii\data\Pagination;

class SearchController extends Controller
{
  
    public function actionSearch()
    {        
//        if (Yii::$app->request->post())
//        {
            $text = $_GET['text-search'];
            if ($text != null)
            {
                $query = Product::find()
                        ->select(['product_photo.id as photo_id', 'product_type.id as product_type_id', 'product_type.title as category', 'product_photo.*', 'product.*'])
                        ->innerJoin('product_photo', 'product_photo.product_id = product.id')
                        ->innerJoin('product_type', 'product.product_type_id = product_type.id')                       
                        ->where(['like','product.title',$text]);               
                $count = $query->count();
                $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 2]);
                $product = $query->offset($pagination->offset)
                        ->limit($pagination->limit)
                        ->asArray()
                        ->all();
            }            
            return $this->render('search', ['model' => $product,'textSearch'=>$text,'pages' => $pagination]);          
       // }
    }

}
