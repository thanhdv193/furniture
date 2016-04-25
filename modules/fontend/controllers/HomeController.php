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
use Goutte\Client;
use himiklab\thumbnail\EasyThumbnailImage;
use yii\helpers\Url;

class HomeController extends Controller
{
    public function actionIndex()
    {    
     $a =   EasyThumbnailImage::thumbnailImg(
                Url::base('http').'/web/upload/avatar/1456116504_vet-thai', 50, 50, EasyThumbnailImage::THUMBNAIL_OUTBOUND, ['alt' => 'aaaaa']
        );
     var_dump($a); die;
        $client = new Client();
        $crawler = $client->request('GET', 'http://www.wowkeren.com/lirik/lagu/got7/a.html');
        //$news = $crawler->filter('.fck_detail width_common')->each(function($node)
//        {
//            $link = $node;
//            return [
//                'title' => $link->text(),
//                'link' => $link->link()->getUri(),
//                'thumbnail' => $node->filter('.txt_link img')->attr('src'),
//                'description' => trim($node->filter('.news_lead')->text()),
//            ];
//        });
//        $news = $crawler->filter('.fck_detail width_common')->each(function($node)
//        {
//            $link = $node;
//            return [
//                'title' => $link->text(),
//                'link' => $link->link()->getUri(),
//                'thumbnail' => $node->filter('.txt_link img')->attr('src'),
//                'description' => trim($node->filter('.news_lead')->text()),
//            ];
//        });
        $news = $crawler->filter('#FC-container-mtop');
        
        echo'<pre>';var_dump($news->text());die;

        $listProduct = Product::find()
                ->select(['product_photo.id as photo_id','product_photo.*','product.*'])
                ->innerJoin('product_photo','product_photo.product_id = product.id')
                ->where(['product.product_group_id'=>11,'product.is_active'=>  Product::is_active])
                ->offset(0)
                ->limit(8)
                ->asArray()->all();
        //ImageProduct::Image(3723, 0, 2);
        //echo'<pre>'; var_dump($listProduct); die;
        return $this->render('index',['listProduct'=>$listProduct]);
    }
    public function actionContact()
    {    	     
        return $this->render('contact',['data'=>null]);
    }
    public function actionAbout()
    {    	     
        $about = About::find()
                ->asArray()
                ->one();
        //echo'<pre>'; var_dump($about); die;
        return $this->render('about',['data'=>$about]);
    }
    public function actionRegister()
    {
        if (!\Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $model = new User();

        if ($model->load(Yii::$app->request->post()))
        {
            $password = $model->password_hash;
            $model->password_hash = Yii::$app->security->generatePasswordHash($model->password_hash);
            $model->birthday = strtotime($model->birthday);
            $model->avatar = null;
            
            if($model->save(false))
            {
                $modelLogin = new LoginForm();
                $modelLogin->username = $model->username;
                $modelLogin->password = $password;
               //echo'<pre>'; var_dump($modelLogin); die;
                $modelLogin->login();
                
                return $this->goHome();
            }
            
        } else
        {
            return $this->render('register', [
                        'model' => $model,
            ]);
        }
    }

    public function actionCheckCart()
    {         
        if (Yii::$app->request->post())
        {
            if (Yii::$app->user->isGuest == false)
            {
                $countCart = Cart::find()
                        ->where(['user_id' => Yii::$app->user->id])
                        ->count();

                return json_encode(array(
                    'count' => $countCart,
                ));
            } else
            {
                $cart = Yii::$app->params['cart'];
                $getCookies = CookieHelper::getCookie($cart);
                if ($getCookies == false)
                {
                    //cart null
                    return json_encode(array(
                        'count' => 0,
                    ));
                } else
                {
                    $product = unserialize($getCookies);
                    $countCart = count($product);
                    return json_encode(array(
                        'count' => $countCart,
                    ));
                }
            }
        }
    }
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
