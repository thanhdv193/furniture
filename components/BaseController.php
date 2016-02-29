<?php

namespace app\components;

use Yii;
use yii\web\Controller;
use app\models\LogHistory;

class BaseController extends Controller
{
    public function beforeAction($action) {
        
        if (!in_array($action->controller->id, ["error", "auth", "home"]) && !Yii::$app->user->can($action->controller->id . "_" . $action->id)) {
            print_r('Chú làm éo có quyền mà vào đây');
            die;
        }
        echo'<pre>'; var_dump($action); die;
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
