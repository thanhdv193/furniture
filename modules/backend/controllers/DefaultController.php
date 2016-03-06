<?php

namespace app\modules\backend\controllers;

use app\models\ProductPhoto;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\Orders;
use app\models\AuthGroup;
use app\models\AuthItem;
use app\models\User;
use app\models\AuthAssignment;
use app\components\BaseController;



class DefaultController extends BaseController
{
    public function actionIndex()
    {   
        if (Yii::$app->user->isGuest)
        {      
             return $this->redirect('dang-nhap-quan-tri.html');             
             
        }else{
            
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
                'Watting'=>$listOrderWatting,
                'OrderDone'=>$listOrderDone,
                'OrderProcess'=>$listOrderProcess,
                'all'=>$listOrder,
            );  
            return $this->render('index');
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
    public function actionPermissionUser($id)
    {        
        $user = User::find()
                ->where(['id'=>$id])
                ->asArray()
                ->one();
        
        $group = AuthGroup::find()
                ->where(['status'=>1])
                ->all();
        return $this->render('permission-user',['group'=>$group,'user'=>$user]);        
    }
}
