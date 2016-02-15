<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\Product;
use app\models\Image;

class ProductBoxThreeWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
//        $menu = BackendMenu::find()->where(['parent_id' => 0])->asArray()->all();
//        foreach ($menu AS &$value)
//        {
//            $subMenu = BackendMenu::find()->where(['parent_id' => $value['id']])->orderBy(['sort_order' => SORT_ASC])->asArray()->all();
//            $value['sub_menu'] = $subMenu;
//            $value['count_sub_menu'] = count($subMenu);
//        }
//        //echo'<pre>';  var_dump($menu); echo'<pre>'; die;
        return $this->render('ProductBoxThree');
    }

}
