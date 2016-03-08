<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\ProductType;
use app\components\helpers\Menu;

class MenuLeftWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $list = ProductType::find()->all();
        $menu =  Menu::getMenu($list);
        
        //echo'<pre>';  var_dump($menu); echo'<pre>'; die;
        return $this->render('MenuLeft', ['menu' => $menu]);
    }

}
