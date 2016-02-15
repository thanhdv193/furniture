<?php
namespace app\widgets;

use yii\base\Widget;
use app\models\Product;
use app\models\Image;


class TrendWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $listproduct = Product::find()->where(['product_group_id'=>1,'active'=>1])->asArray()->all();
//        $listId = array();
//        foreach($listproduct as $value)
//        {
//            $listId[] = $value['product_id'];
//        }
//        $imageProduct = Image::find()->where(['object_id'=>$listId])->all();
//        $arrayImage = array();
//        foreach($imageProduct as $value)
//        {
//            $arrayImage[$value['object_id']] = $value;
//        }
//        foreach($listproduct as &$value)
//        {
//            $value['image_list'] = $arrayImage[$value['product_id']];
//        }
        //echo '<pre>'; var_dump($listproduct); die;
        return $this->render('Trend',['listproduct'=>$listproduct]);      
    }
}


