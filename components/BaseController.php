<?php

namespace app\components;

use Yii;
use yii\web\Controller;
use app\models\LogHistory;
use yii\helpers\Url;

class BaseController extends Controller
{
    public function beforeAction($action) {
        
        if (!in_array($action->controller->id, ["error", "auth", "home",'default']) && !Yii::$app->user->can($action->controller->id . "_" . $action->id)) {
            return $this->redirect(Url::base('http').'/site/not-permission');
        }
        
        $model = new LogHistory();       
        if(Yii::$app->user->id == null)
        {
            $model->id_user = 0;
        }else{
            $model->id_user=Yii::$app->user->id;
        }
        
        $model->action=Yii::$app->controller->action->id;       
        $model->page_url = Yii::$app->getRequest()->getUrl();
        $model->ip_address=Yii::$app->request->userIP;
        $model->created_at = time();
        $model->save(FALSE);
        return parent::beforeAction($action);
    }
}
