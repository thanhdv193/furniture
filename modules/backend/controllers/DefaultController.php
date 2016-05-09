<?php

namespace app\modules\backend\controllers;

use app\components\BaseController;
use app\models\OrderDetail;
use app\models\Orders;
use app\models\Product;
use app\models\ProductPhoto;
use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;

class DefaultController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index2',['data'=>null]);
        if (Yii::$app->user->isGuest)
        {
             return $this->redirect('dang-nhap-quan-tri.html');

        }else{

           $productTop = OrderDetail::find()
                     ->select(['COUNT(order_detail.product_id) as count','order_detail.*','product.title'])
                     ->leftJoin('product', 'order_detail.product_id = product.id')
                     ->innerJoin('orders', 'orders.id = order_detail.order_id')
                     ->where(['orders.is_process'=>Orders::order_process_done])
                     ->groupBy('order_detail.product_id')
                     ->asArray()
                     ->all();
            $listProduct = Product::find()
                         ->count();
            //get all order
            $listOrder = Orders::find()
                        ->count();

            $listOrderWatting = Orders::find()
                        ->where(['is_process'=>  Orders::order_process_watting])
                        ->count();
            $listOrderProcess = Orders::find()
                        ->where(['is_process'=>  Orders::order_process])
                        ->count();
            $listOrderDone = Orders::find()
                        ->where(['is_process'=>  Orders::order_process_done])
                        ->count();
            $inforOrder = array(
                'orderWatting'=>$listOrderWatting,
                'orderDone'=>$listOrderDone,
                'orderProcess'=>$listOrderProcess,
                'allOrder'=>$listOrder,
                'productTop'=>$productTop,
                'listProduct'=>$listProduct
            );
            return $this->render('index',['data'=>$inforOrder]);
        }

    }
    public function actionLogin(){
        return $this->render('login-admin');
    }

public function actionUpload()
    {
        $post = Yii::$app->request->post();
        $fileName = $_FILES['file'];
        $hash = $_POST['tem_hash'];

        if (isset($fileName) && isset($hash) && $fileName != null)
        {
            $photoModel = new ProductPhoto();
            $objecFile = new UploadedFile();
            $objecFile->name = $fileName['name'];
            $objecFile->tempName = $fileName['tmp_name'];
            $objecFile->type = $fileName['type'];
            $objecFile->size = $fileName['size'];
            $objecFile->error = $fileName['error'];

            $photoModel->filename = $objecFile;
            $upload = $photoModel->upload('product');
            if ($upload)
            {
                $photoModel->product_id = 0;
                $photoModel->photo = 'product';
                $photoModel->create_date = time();
                $photoModel->image_path = $upload['patch'];
                $photoModel->z_index = 0;
                $photoModel->is_avatar = 0;
                $photoModel->filename = $upload['filename'];
                $photoModel->temp_hash = $hash;
                $photoModel->save();

                $url = Url::base('http') . '/' . $upload['patch'] . $upload['filename'];
                return json_encode($url);
            }
        }
    }

}
