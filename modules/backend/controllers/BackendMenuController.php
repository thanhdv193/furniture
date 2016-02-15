<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\BackendMenu;
use app\models\BackendMenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * BackendMenuController implements the CRUD actions for BackendMenu model.
 */
class BackendMenuController extends Controller
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
     * Lists all BackendMenu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BackendMenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BackendMenu model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BackendMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BackendMenu();

        if ($model->load(Yii::$app->request->post()))
        {
            $post = Yii::$app->request->post();
            $model->icon = UploadedFile::getInstance($model, 'icon');
            $upload = $model->upload();
            if ($post['parent_id'] == null)
            {
                $model->parent_id = 0;
            } else
            {
                $model->parent_id = $post['parent_id'];
            }
            $model->name = $post['name'];
            if ($post['sort_order'] == null)
            {
                $model->sort_order = 0;
            } else
            {
                $model->sort_order = $post['sort_order'];
            }
            $model->route = Url::base('http') . '/' . $post['route'];


            $model->save(false);
            return $this->redirect(['index']);
        } else
        {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing BackendMenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()))
        {
            $post = Yii::$app->request->post();
            $model->icon = UploadedFile::getInstance($model, 'icon');
            $upload = $model->upload();
            if ($post['parent_id'] == null)
            {
                $model->parent_id = 0;
            } else
            {
                $model->parent_id = $post['parent_id'];
            }
            $model->name = $post['name'];
            if ($post['sort_order'] == null)
            {
                $model->sort_order = 0;
            } else
            {
                $model->sort_order = $post['sort_order'];
            }

            $model->route = Url::base('http') . '/' . $post['route'];
            $model->save(false);

            return $this->redirect(['index']);
        } else
        {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing BackendMenu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BackendMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return BackendMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BackendMenu::findOne($id)) !== null)
        {
            return $model;
        } else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
