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
use app\components\helpers\Search;


class SearchController extends Controller
{
  
   public function actionSearchAll()
    {            
        if (isset($_GET['title']))
        {
            $text = $_GET['title'];

            if ($text != null)
            {
                $query = Product::find()
                        ->select(['product_photo.id as photo_id', 'product_type.id as product_type_id', 'product_type.title as category', 'product_photo.*', 'product.*'])
                        ->innerJoin('product_photo', 'product_photo.product_id = product.id')
                        ->innerJoin('product_type', 'product.product_type_id = product_type.id')
                        ->where(['like', 'product.title', $text]);
                $count = $query->count();
                $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 2]);
                $product = $query->offset($pagination->offset)
                        ->limit($pagination->limit)
                        ->asArray()
                        ->all();
            }
            return $this->render('search', ['model' => $product, 'textSearch' => $text, 'pages' => $pagination]);
        }else{
            return $this->goHome();
        }
    }
    
    public function actionSearchTool()
    {
        $title ='giay';
        //Search::pushBulkSearch();
        $listData = Search::Search($title,0,10);
        $id = array();
        foreach($listData as $value)
            {
                $id[] = $value->_id;
            }
        $query = Product::find()
                        ->select(['product_photo.id as photo_id', 'product_type.id as product_type_id', 'product_type.title as category', 'product_photo.*', 'product.*'])
                        ->innerJoin('product_photo', 'product_photo.product_id = product.id')
                        ->innerJoin('product_type', 'product.product_type_id = product_type.id')
                        ->where(['product.id'=>$id]);
                $count = $query->count();
                $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 10]);
                $product = $query->offset($pagination->offset)
                        ->limit($pagination->limit)
                        ->asArray()
                        ->all();    
        echo'<pre>'; var_dump($product); die;
    }

}
