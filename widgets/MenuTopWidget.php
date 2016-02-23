<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\ProductType;

class MenuTopWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $category = ProductType::find()->where(['active' => 1,'parent_id'=>0])->asArray()->all();
        //echo'<pre>';  var_dump($menu); echo'<pre>'; die;
        return $this->render('MenuTop', ['category' => $category]);
    }

}
