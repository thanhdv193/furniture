<?php

namespace app\modules\backend\controllers;

use app\models\ProductPhoto;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\UploadedFile;



class DefaultController extends Controller
{
    public function actionIndex()
    {        
        if (Yii::$app->user->isGuest)
        {
            //return $this->redirect('/backend/default/login');
             return $this->render('index');
        }else{
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
}
