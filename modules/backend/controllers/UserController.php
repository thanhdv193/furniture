<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\User;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\AuthAssignment;
use yii\web\UploadedFile;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=20;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
        {
        $model = new User();

        if ($model->load(Yii::$app->request->post()))
            {
            $model->password_hash = Yii::$app->security->generatePasswordHash($model->password_hash);
            $model->avatar = UploadedFile::getInstance($model, 'avatar');
            $model->birthday = strtotime($model->birthday); 
            if ($model->avatar == null)
                {
                
                if ($model->save(false))
                    {
                    $authAssignmentModel = new AuthAssignment();
                    $authAssignmentModel->item_name = $model->group;
                    $authAssignmentModel->user_id = (string) $model->id;
                    $authAssignmentModel->created_at = time();
                    $authAssignmentModel->save();
                    }
                } else
                {
                $upload = $model->upload('avatar');                                  
                if ($upload)
                    {
                    $model->avatar = $upload['patch'] . $upload['filename'];                    
                    if ($model->save(false))
                        {
                        $authAssignmentModel = new AuthAssignment();
                        $authAssignmentModel->item_name = $model->group;
                        $authAssignmentModel->user_id = (string) $model->id;
                        $authAssignmentModel->created_at = time();
                        $authAssignmentModel->save();
                        }
                    }
                }

            return $this->redirect(['view', 'id' => $model->id]);
            } else
            {
            return $this->render('create', [
                        'model' => $model,
            ]);
            }
        }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) ) {
            $model->password_hash=Yii::$app->security->generatePasswordHash($model->password_hash);
            $model->avatar = UploadedFile::getInstance($model, 'avatar');
            if($model->avatar == null)
                           {
                                if ($model->save(false))
                                   {
                                       $userId =  AuthAssignment::find()->where(['user_id'=>$id])->one();
                                       if($userId == null)
                                       {
                                            $authAssignmentModel = new AuthAssignment();                                       
                                            $authAssignmentModel->item_name = $model->group;
                                            $authAssignmentModel->user_id = (string) $model->id;
                                            $authAssignmentModel->created_at = time();
                                            $authAssignmentModel->save();
                                       }else{
                                            $userId->item_name = $model->group;                                           
                                            $userId->save();
                                       }                                                                              
                                   }
                           } else
                           {
                            //   $model->avatar = UploadedFile::getInstance($model, 'avatar');
                               $upload = $model->upload('avatar');
                               if ($upload)
                               {
                                   $model->avatar = $upload['patch'] . $upload['filename'];
                                   if ($model->save(false))
                                   {
                                       $userId =  AuthAssignment::find()->where(['user_id'=>$id])->one();
                                       if($userId == null)
                                       {
                                            $authAssignmentModel = new AuthAssignment();                                       
                                            $authAssignmentModel->item_name = $model->group;
                                            $authAssignmentModel->user_id = (string) $model->id;
                                            $authAssignmentModel->created_at = time();
                                            $authAssignmentModel->save();
                                       }else{
                                            $userId->item_name = $model->group;                                           
                                            $userId->save();
                                       }   
                                   }
                               }
                           }
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
      
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
