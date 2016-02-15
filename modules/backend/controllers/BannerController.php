<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\Banner;
use app\models\BannerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Image;
use yii\web\UploadedFile;

/**
 * BannerController implements the CRUD actions for Banner model.
 */
class BannerController extends Controller
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
     * Lists all Banner models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BannerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banner model.
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
     * Creates a new Banner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Banner();
        $modelImage = new Image();
        $hash = md5(uniqid('', true));
        if ($_POST)
        {
            $fileImage = UploadedFile::getInstances($model, 'image_id');

            foreach ($fileImage as $key => $value)
            {
                $modelImage = new Image();
                $modelImage->filename = $value;
                $upload = $modelImage->upload('banner');
                if ($upload)
                {

                    $modelImage->object_id = 0;
                    $modelImage->object_type = 'banner';
                    $modelImage->create_date = time();
                    $modelImage->image_path = $upload['patch'];
                    $modelImage->sort_order = 0;
                    $modelImage->filename = $upload['filename'];
                    $modelImage->temp_hash = $hash;
                    $modelImage->save();
                }
            }
        }
        if ($model->load(Yii::$app->request->post()))
        {
            $model->image_id = 0;
            $model->created_at = time();
            if ($model->sort_order == null)
            {
                $model->sort_order = 0;
            }                                           
            if ($model->save())
            {
                $modelImg = Image::find()->where(['temp_hash' => $hash])->one();
                if ($modelImg != null)
                {
                    $modelImg->object_id = $model->banner_id;
                    $modelImg->save();
                }
            }            

            return $this->redirect(['index']);
        } else
        {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Banner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save())
        {
            return $this->redirect(['view', 'id' => $model->banner_id]);
        } else
        {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Banner model.
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
     * Finds the Banner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Banner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Banner::findOne($id)) !== null)
        {
            return $model;
        } else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
