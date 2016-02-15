<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\Product;
use app\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\Image;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController
        extends Controller
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {


        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=15;
        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        
        $hash = md5(uniqid('', true));
        if ($_POST)
        {
            $fileImage = UploadedFile::getInstances($model, 'image');
            
            foreach ($fileImage as $key => $value)
            {
                $modelImage = new Image();
                $modelImage->filename = $value;
                $upload = $modelImage->upload('product');
                if ($upload)
                {

                    $modelImage->object_id = 0;
                    $modelImage->object_type = 'product';
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
            
            $model->create_date = time();
            $model->sort_order = 0;
            $model->view_count = 0;
            if($model->product_group_id == null){
                $model->product_group_id = 0;
            }
            //$model->product_group_id = 0;
            $model->image =0;
           
            if ($model->save())
            {
                $imageUpload = Image::find()->where(['temp_hash' => $hash])->all();
                if ($imageUpload != null)
                {
                    foreach ($imageUpload as $value)
                    {
                        $value->object_id = $model->product_id;
                        $value->save();
                    }
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

    public function actionUpLoadImage()
    {
        $model = new Product();
        $modelImage = new Image();
        $post = Yii::$app->request->getBodyParams();
        $file_name = $_FILES['image_id'];
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
        $model->image_id = $objecFile;
        $model->upload();
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save())
        {
            return $this->redirect(['view', 'id' => $model->product_id]);
        } else
        {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null)
        {
            return $model;
        } else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
