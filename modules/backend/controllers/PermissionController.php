<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\Contact;
use app\models\ContactSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AuthItem;

/**
 * ContactController implements the CRUD actions for Contact model.
 */
class PermissionController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Contact models.
     * @return mixed
     */
    public function actionDefinePermission()
    {
        $post = Yii::$app->request->post();
        if($post)
        {
            $authItem = new AuthItem();
            $authItem->name = $post['data']['name'];
            $authItem->type = $post['data']['type'];
            $authItem->alias = $post['data']['alias'];
            $authItem->group_id = $post['data']['group'];      
            $authItem->created_at = time();
            $authItem->updated_at = time();            
            if($authItem->save())
            {
                return json_encode(array(
                        'status' => 'ok',
                    ));
            }else{
                return json_encode(array(
                        'status' => 'false',
                    ));
            }
            echo'<pre>'; var_dump($authItem); die;
        }
    }

    
}
