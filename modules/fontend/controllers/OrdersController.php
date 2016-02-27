<?php

namespace app\modules\fontend\controllers;

use Yii;
use app\models\Orders;
use app\models\Cart;
use app\models\OrdersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Product;
use app\models\OrderDetail;
use app\components\helpers\CookieHelper;

/**
 * OrdersController implements the CRUD actions for Orders model.
 */
class OrdersController extends Controller
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
    public function actionIndex()
    {
         $model = new Orders();                     
        if ($model->load(Yii::$app->request->post())) {
            
            if (Yii::$app->user->isGuest == false)
            {   
                $user_id = Yii::$app->user->id;
                $name = $model->name ;
                $address = $model->address;
                
                if ($model->email == null)
                {
                    $email = '123@gmail.com';
                } else
                {
                    $email = $model->email;
                }              
                $phone= $model->phone;
                
                $orderModel = new Orders();
                $orderModel->user_id = Yii::$app->user->id;
                $orderModel->name = $name;
                $orderModel->address = $address;
                $orderModel->email = $email;
                $orderModel->phone = $phone;
                $orderModel->create_date = time();
                $orderModel->cust_note = '1';
                $orderModel->is_process = Orders::order_process;
                
                //$orderModel->save();              
                echo'<pre>'; var_dump($orderModel->save()); die;
                $cart = Cart::find()
                        ->select(['cart.quantity as cart_quantity', 'cart.product_id as cart_product_id','product.*'])
                        ->innerJoin('product', 'cart.product_id = product.id')
                        ->where(['cart.user_id'=>Yii::$app->user->id])
                        ->asArray()
                        ->all();
                foreach($cart as $value)
                    {
                        $orderDetali = new OrderDetail();
                        $orderDetali->order_id = $model->id;
                        $orderDetali->product_id = $value['id'];
                        $orderDetali->price = $value['price'];
                        $orderDetali->quantity = $value['cart_quantity'];
                        $orderDetali->discount = 1;
                        $orderDetali->size = '0';
                        $orderDetali->is_timegold = '0';
                        $orderDetali->product_type_id = $value['product_type_id'];    
                        if($orderDetali->save()){
                            return $this->render('orders-done',['status' => Orders::order_success]);   
                        }
                    }                
                
            } else
            {
                $product_sl = array();
                $product_id = array();
                $cart = Yii::$app->params['cart'];                
                
                $getCookies = CookieHelper::getCookie($cart);
                if ($getCookies == false)
                { die("khong thanh cong");
                    //$listProduct = null;
                    //return $this->render('index', ['dataCart' => $listProduct, 'status' => true]);
                } else
                {
                    $product = unserialize($getCookies);
                    
                }
                foreach ($product as $value)
                    {
                        $product_sl[$value['id']] = $value;
                        $product_id[] = $value['id'];
                    }                
                $listProduct = Product::find()
                        ->select(['product.*'])
                        ->where(['product.id' => $product_id, 'product.is_active' => Product::is_active])                       
                        ->asArray()
                        ->all();
                   
                    $model->create_date = time();
                    $model->user_id = 0;
                    $model->cust_note = '1';
                    $model->is_process = Orders::order_process;
                    if ($model->email == null)
                    {
                        $model->email = '123@gmail.com';
                    }
                    $model->save();   
                    
                    foreach($listProduct as $value)
                    {
                        $orderDetali = new OrderDetail();
                        $orderDetali->order_id = $model->id;
                        $orderDetali->product_id = $value['id'];
                        $orderDetali->price = $value['price'];
                        $orderDetali->quantity = $product_sl[$value['id']]['sl'];
                        $orderDetali->discount = 1;
                        $orderDetali->size = '0';
                        $orderDetali->is_timegold = '0';
                        $orderDetali->product_type_id = $value['product_type_id'];    
                        $orderDetali->save();
//                        if($orderDetali->save()){
//                                                  
//                        }else{
//                            return $this->redirect(['orders-done', 'status' => Orders::order_false]);                        
//                        }
                        
                    }
                    CookieHelper::deleCookie($cart);
                    return $this->render('orders-done',['status' => Orders::order_success]);                  
            }                        
        } else {
            if (Yii::$app->user->isGuest == false)
            { 
                
                $model->name = Yii::$app->user->identity->last_name.' '.Yii::$app->user->identity->name ;
                $model->address = Yii::$app->user->identity->address;
                $model->email = Yii::$app->user->identity->email;
                //echo'<pre>'; var_dump($model); die;
            }
            return $this->render('index', [
                'model' => $model,
            ]);
        }
        
    }
    
    public function actionAdd()
    { 
        if (Yii::$app->user->isGuest == false)
        { // user ->save db
            echo Yii::$app->user->identity->username;
            die();
        } else
        {
            
            
        }
    }

    /**
     * Displays a single Orders model.
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
