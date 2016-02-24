<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;
use app\models\LoginForm;

class FormLogInWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if (!\Yii::$app->user->isGuest)
        {
            //$model = new LoginForm();
            $model = array('username'=>Yii::$app->user->identity->username);
            return $this->render('FormLogIn',['isGuest'=>false,'model' => $model]);
            
            return $this->goHome();
        }else{
                    $model = new LoginForm();
                    if ($model->load(Yii::$app->request->post()) && $model->login())
                    {
                        //return $this->redirect($_SERVER['HTTP_REFERER']);
                        //return $this->goBack();
                    } else
                    {
                        return $this->render('FormLogIn',['isGuest'=>true,'model' => $model]);
                    }
            $model = new LoginForm();
            return $this->render('FormLogIn',['isGuest'=>true,'model' => $model]);
            
        }
       
        //return $this->render('FormLogIn', ['category' => $category]);
    }

}
