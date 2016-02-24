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
            $model = new LoginForm();
            return $this->render('FormLogIn',['model' => $model]);
            
            return $this->goHome();
        }
            $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login())
        { 
            //return $this->redirect($_SERVER['HTTP_REFERER']);
            //return $this->goBack();
            
        } else
        {   
            return $this->render('FormLogIn',['model' => $model]);
            return $this->render('login', ['model' => $model]);
        }
        //return $this->render('FormLogIn', ['category' => $category]);
    }

}
