<?php

namespace app\modules\fontend\controllers;

use app\models\Contact;
use yii\web\Controller;
use Yii;
use yii\helpers\Url;

class ContactController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionCreate()
    {
        $model = new Contact();
        if ($model->load(Yii::$app->request->post()))
        {
            $model->create_date = time();
            if (Yii::$app->user->isGuest == false)
            {
                $model->user_id = Yii::$app->user->identity->id;
            }else{
                $model->user_id ='0';
            }           
            $model->save();
            return $this->redirect(Yii::$app->request->referrer);
        } else
        {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

}
