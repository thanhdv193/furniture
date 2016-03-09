<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\Contact;
use app\models\ContactSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AuthItem;
use yii\rbac\DbManager;
use app\models\AuthAssignment;
use app\components\BaseController;
use app\models\User;
use app\components\helpers\FunctionService;
use app\models\AuthGroup;


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
     public function actionPermission()
    {
         $list = FunctionService::getServices();
         $group = AuthGroup::find()
                ->asArray()
                ->all();
                
        return $this->render('permission',['data'=>$list,'group'=>$group]);
    }
   
    public function actionGetUserAdmin()
    {
        $listUser = User::find()
                ->where(['group'=>User::User_Admin])
                ->asArray()
                ->all();
        return $this->render('user-admin', [
            'listData' => $listUser,            
        ]);        
        
    }
    public function actionGetPermissionUser($id)
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
    
    /**
     * Lists all Contact models.
     * @return mixed
     */
    public function actionDefinePermission()
    {
        $post = Yii::$app->request->post();
        if($post)
        {
            $item = AuthItem::find()
                    ->where(['name' => $post['data']['name']])
                    ->one();
            if ($item == null)
            {
                $authItem = new AuthItem();
                $authItem->name = $post['data']['name'];
                $authItem->type = $post['data']['type'];
                $authItem->alias = $post['data']['alias'];
                $authItem->group_id = $post['data']['group'];
                $authItem->created_at = time();
                $authItem->updated_at = time();
                if ($authItem->save())
                {
                    return json_encode(array(
                        'status' => 'ok',
                    ));
                } else
                {
                    return json_encode(array(
                        'status' => 'false',
                    ));
                }
            }else{
                $item->alias = $post['data']['alias'];
                $item->group_id = $post['data']['group'];
                $item->updated_at = time();
                if($item->save())
                {
                    return json_encode(array(
                        'status' => 'ok',
                    ));
                }else{
                    return json_encode(array(
                        'status' => 'false',
                    ));
                }
            }

            echo'<pre>';
            var_dump($authItem);
            die;
        }
    }
    
    public function actionPermissionUser()
    {
        $post = Yii::$app->request->post();
        if($post)
        {
            $user_id = $post['user_id'];
            $dbManager = new DbManager();
            $dbManager->init();
            AuthAssignment::deleteAll(['user_id'=>$user_id]);  
            if(isset($post['data'])){
                foreach ($post['data'] as $role)
                {
                    $assignment = $dbManager->getAssignment($role, $user_id);
                    if ($assignment == null)
                    {
                        $dbManager->assign($dbManager->getPermission($role), $user_id);
                    }
                }
            }            
                return json_encode(array(
                        'status' => 'ok',
                    ));
        }
    }
    public function actionAssigndata()
    {
        $params = \Yii::$app->request->post();
        if (!empty($params))
        {
            self::removeAssignmentByUserId($params['id']);
            if (!empty($params['data']))
            {
                $dbManager = new DbManager();
                $dbManager->init();
                foreach ($params['data'] as $role)
                    {
                    $assignment = $dbManager->getAssignment($role, $params['id']);
                    if ($assignment == null)
                    {
                        $dbManager->assign($dbManager->getPermission($role), $params['id']);
                    }
                    }
            }
            return $this->response(new Response(true, "Cấp quyền cho tài khoản thành công", []));
        }
    }

}
