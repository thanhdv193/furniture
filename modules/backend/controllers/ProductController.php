<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\Product;
use app\models\ProductSearch;
use yii\web\Controller;
use app\models\ProductPhoto;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
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

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionDemo()
    {
        if (Yii::$app->request->post() ) {
          
          $file_name = array();      
          //echo'<pre>'; var_dump($_FILES['image']); die;
            foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name)
                { 
                if($tmp_name == null){
                    break;   
                }
                $file_name[] =array(
                    'tmp_name'=>$tmp_name,
                    'name'=>$_FILES['image']['name'][$key],
                    'type'=>$_FILES['image']['type'][$key],
                    'tmp_name'=>$_FILES['image']['tmp_name'][$key],
                    'error'=>$_FILES['image']['error'][$key],
                    'size'=>$_FILES['image']['size'][$key],                  
                );                
                }
                echo'<pre>'; var_dump($file_name); die;
            $model  = UploadedFile::getInstance($_FILES['image']);   
            
        }else {
            return $this->render('demo');
        }
    }
     /**
      * action delete image ajax.
      */
     public function actionDeleteImage()
    {
        $post = Yii::$app->request->post();
        if ($post)
        {
            $id = $post['img_id'];
            $model = ProductPhoto::findOne($id);
            $url = $model['image_path'] . $model['filename'];
            if (unlink($url))
            {
                if ($model->delete())
                {
                    return json_encode(array(
                        'status' => 'ok',
                    ));
                }
            } else
            {
                return json_encode(array(
                    'status' => 'false',
                ));
            }
        }
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        $hash = md5(uniqid('', true));
        if ($model->load(Yii::$app->request->post()))
        {
            $hash = $_POST['tem_hash'];
            foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name)
                {
                if ($tmp_name == null)
                {
                    break;
                }
                $file_name[] = array(
                    'tmp_name' => $tmp_name,
                    'name' => $_FILES['image']['name'][$key],
                    'type' => $_FILES['image']['type'][$key],
                    'tmp_name' => $_FILES['image']['tmp_name'][$key],
                    'error' => $_FILES['image']['error'][$key],
                    'size' => $_FILES['image']['size'][$key],
                );
                }
            foreach ($file_name as $value)
                {
                $photoModel = new ProductPhoto();
                $objecFile = new UploadedFile();
                $objecFile->name = $value['name'];
                $objecFile->tempName = $value['tmp_name'];
                $objecFile->type = $value['type'];
                $objecFile->size = $value['size'];
                $objecFile->error = $value['error'];
                $photoModel->filename = $objecFile;
                $upload = $photoModel->upload('product');
                if ($upload)
                {
                    $photoModel->product_id = 0;
                    $photoModel->photo = 'product';
                    $photoModel->create_date = time();
                    $photoModel->image_path = $upload['patch'];
                    $photoModel->z_index = 0;
                    $photoModel->is_avatar = 0;
                    $photoModel->filename = $upload['filename'];
                    $photoModel->temp_hash = $hash;
                    $photoModel->save();
                }
                }
            $model->create_date = time();
            $model->photo = $hash;
            if ($model->save())
            {
                $imageUpload = ProductPhoto::find()->where(['temp_hash' => $hash])->all();
                if ($imageUpload != null)
                {
                    foreach ($imageUpload as $value)
                        {
                        $value->product_id = $model->id;
                        $value->save();
                        }
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else
        {
            return $this->render('create', [
                        'model' => $model,
                        'temp_hash' => $hash,
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $image = ProductPhoto::find()
                 ->where(['product_id'=>$id])
                ->asArray()
                ->all();        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'image'=>$image,
            ]);
        }
    }

    /**
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
