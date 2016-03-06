<?php

namespace app\modules\fontend\controllers;

use yii\web\Controller;
use app\models\Product;
use app\models\ProductType;
use yii\data\Pagination;

class ProductController extends Controller
{

    public function actionIndex()
    {

        //return $this->render('index');
    }

    public function actionProductDetail($id = 0)
    { 
        $product = Product::find()
                ->select(['product_type.id as product_type_id','product_type.title as category','product.*'])
                ->innerJoin('product_type', 'product.product_type_id = product_type.id')
                ->where(['product.id' => $id, 'product.is_active' => 1])->asArray()->one();
        
        if ($product == null)
            {
            throw new \yii\web\NotFoundHttpException();
            }
        return $this->render('product-detail', ['data' => $product]);
    }

    public function actionProductCategory($id)
        { 
        $category = ProductType::find()
                ->where(['id' => $id])
                ->one();
        if ($category == null)
            {
            throw new \yii\web\NotFoundHttpException();
            } else
            {
            $query = Product::find()
                    ->select(['product_photo.id as photo_id','product_type.id as product_type_id', 'product_type.title as category', 'product_photo.*','product.*'])
                    ->innerJoin('product_photo','product_photo.product_id = product.id')
                    ->innerJoin('product_type', 'product.product_type_id = product_type.id')
                    ->where(['product_type.id' => $id, 'product_type.active' => 1]);    
            
            $count = $query->count();
            $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 5]);
            $product = $query->offset($pagination->offset)
                    ->limit($pagination->limit)     
                    ->asArray()
                    ->all();            
            return $this->render('product-category', ['category'=>$category,'data' => $product, 'pages' => $pagination]);
            }
        }

    
}
