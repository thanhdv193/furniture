<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\Product;
use app\models\Image;

class ProductBoxTwoWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $listProductTab1 = array();
        $listProductTab2 = array();
        $listProduct = Product::find()
                ->where(['product_group_id' => 5])
                ->asArray()
                ->all();
        foreach ($listProduct as $value)
        {
            if ($value['product_category_id'] == 5)  // ao khoac nam
            {
                $listProductTab1[] = $value;
            }
            if ($value['product_category_id'] == 4) // ao so mi nam
            {
                $listProductTab2[] = $value;
            }
        }
//        echo'<pre>';
//        var_dump($listProductTab1);
//        echo'<pre>';
//        var_dump($listProductTab2);
//        die;
        return $this->render('ProductBoxTwo', ['Tab1' => $listProductTab1, 'Tab2' => $listProductTab2]);
        
    }

}
