<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\AuthGroup;
use app\models\AuthGroupSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\components\utils\FileUtils;

use app\models\AuthItem;
use app\components\BaseController;

/**
 * AuthGroupController implements the CRUD actions for AuthGroup model.
 */
class AuthGroupController extends Controller
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

//    /**
//     * Lists all AuthGroup models.
//     * @return mixed
//     */
//    public function actionIndex()
//    {
//        $searchModel = new AuthGroupSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }
   
}
