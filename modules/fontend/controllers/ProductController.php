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
        //$imageProduct = Image::find()->where(['object_id' => $id, 'object_type' => 'product'])->all();
       // $product['list-image'] = $imageProduct;
        //echo'<pre>'; var_dump($product); die;
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
                    ->select(['product_type.id as product_type_id', 'product_type.title as category', 'product.*'])
                    ->innerJoin('product_type', 'product.product_type_id = product_type.id')
                    ->where(['product_type.id' => $id, 'product_type.active' => 1]);
            //echo'<pre>'; var_dump($query); die;
            $count = $query->count();
            $pagination = new Pagination(['totalCount' => $count, 'defaultPageSize' => 1]);
            $product = $query->offset($pagination->offset)
                    ->limit($pagination->limit)
                    ->all();
            //echo'<pre>'; var_dump($pagination); die;
            //$product= null;
            //$pagination =null;

            return $this->render('product-category', ['category'=>$category,'data' => $product, 'pages' => $pagination]);
            }
        }

    public function actionProductTest($id = 2)
    {
        $query = Product::find()->where(['product_category_id' => $id, 'active' => 1]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $product = $query->offset($pagination->offset)
                ->limit(5)
                ->all();
        //echo'<pre>'; var_dump($pagination); die;
        return $this->render('product-category', ['data' => $product,'pages'=>$pagination]);
    }
}
