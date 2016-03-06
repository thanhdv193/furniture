<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\Orders;
use app\models\OrdersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\OrderDetail;
use app\components\BaseController;

/**
 * OrdersController implements the CRUD actions for Orders model.
 */
class OrdersController extends BaseController
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
     * Lists all Orders models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $searchModel = new OrdersSearch();
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$id);        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'id'=>$id,
        ]);
    }    

    /**
     * Displays a single Orders model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $totalMoney = 0;
        $orderDetail = OrderDetail::find()                          
                        ->select(['product.title as product_name','order_detail.*','product_photo.product_id as product_img_id','product_photo.*'])
                        ->innerJoin('product', 'order_detail.product_id = product.id')
                        ->innerJoin('product_photo', 'order_detail.product_id = product_photo.product_id')
                       ->where(['order_detail.order_id' => $id])
                       ->asArray()
                       ->all();
        foreach($orderDetail as &$value)
            {
                $allPrice = (float)$value['price'] * (int)$value['quantity'];
                $value['allPrice'] = $allPrice;
                $totalMoney = $totalMoney + $allPrice;
                
            }
        //var_dump($totalMoney);     echo'<pre>'; var_dump($orderDetail);
            //die;
        $model = $this->findModel($id);
        //echo'<pre>'; var_dump($model); die;
        return $this->render('view', [
            'model' => $model,
            'orderDetail' =>$orderDetail,
            'totalMoney'=>$totalMoney,
        ]);
    }

    /**
     * Creates a new Orders model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Orders();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Orders model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Orders model.
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
     * Finds the Orders model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Orders the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Orders::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
