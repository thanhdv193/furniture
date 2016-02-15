<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\User;
use app\models\UserSearch;
use app\components\BaseController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use kartik\file\FileInput;



/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends BaseController
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
        $dataProvider->pagination->pageSize=15;

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
            $post = Yii::$app->request->post();            
            $model->Avatar = UploadedFile::getInstance($model, 'Avatar');            
            $model->password_hash = Yii::$app->security->generatePasswordHash($post['password_hash']);            
            $upload = $model->upload($post['username']);
            if ($upload)
            {
                $model->username = $post['username'];
                $model->Avatar = $upload;
                $model->email = $post['email'];
                $model->gender = $post['gender'];
                $model->group = 1;
                //$model->password_hash = $post['password_hash'];
            }
            $model->save(false);
            return $this->redirect(['index']);
        } else
        {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    public function actionUpLoadImage()
    {
        $model = new User();
        $post = Yii::$app->request->getBodyParams();
        $file_name = $_FILES['image_id'];
        echo'<pre>'; var_dump($file_name); die;
        $objecFile = new UploadedFile();
        foreach ($file_name as $key => $value)
        {
            if ($key == 'tmp_name')
            {
                $objecFile->tempName = $value;
            } else
            {
                $objecFile->$key = $value;
            }
        }
        $model->Avatar = $objecFile;
        $model->upload();
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
        if ($model->load(Yii::$app->request->post()))
        {
            $model->password_hash = Yii::$app->security->generatePasswordHash($model->password_hash);
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        } else
        {
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
        if (($model = User::findOne($id)) !== null)
        {
            return $model;
        } else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
