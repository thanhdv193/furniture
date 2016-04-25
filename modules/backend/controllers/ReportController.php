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



class ReportController extends Controller
{
    public function actionIndex()
    {           
            return $this->render('index');
        
    }    
    
}
