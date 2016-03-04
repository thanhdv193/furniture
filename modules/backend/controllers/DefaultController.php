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



class DefaultController extends Controller
{
    public function actionIndex()
    {   
        if (Yii::$app->user->isGuest)
        {      
             return $this->redirect('dang-nhap-quan-tri.html');
             //return $this->render('index',['inforOrder'=>$inforOrder]);
             
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
        
//        if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
//                ) && ($_FILES["file"]["size"] < 100000)//Approx. 100kb files can be uploaded.
//                && in_array($file_extension, $validextensions))
//        {
//            if ($_FILES["file"]["error"] > 0)
//            {
//                echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
//            }
//            if ($post)
        
            $fileName = $_FILES['file'];            
            $hash = $_POST['tem_hash']; 
            
            if(isset($fileName) && isset($hash) && $fileName != null )
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
                    
                    $url = Url::base('http').'/'.$upload['patch'].$upload['filename'];
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
//        $list = AuthAssignment::find()
//                                ->select('*')
//                                ->rightJoin('auth_item','auth_assignment.item_name = auth_item.name')
//                                ->asArray()
//                                ->all();
//        echo'<pre>';    var_dump($list); die;
//        $item = AuthItem::find()
//                ->select(['auth_group.*','auth_item.*'])
//                ->innerJoin('auth_group','auth_item.group_id = auth_group.id' )
//                ->groupBy('auth_group.group_name')
//                ->asArray()
//                ->all();
        return $this->render('permission-user',['group'=>$group,'user'=>$user]);        
    }
}
