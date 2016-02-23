<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\ProductType;

class MenuLeftWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $menu = ProductType::find()->where(['active' => 1])->asArray()->all();
        //echo'<pre>';  var_dump($menu); echo'<pre>'; die;
        return $this->render('MenuLeft', ['menu' => $menu]);
    }

}
