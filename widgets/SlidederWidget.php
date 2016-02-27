<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\BannerSlide;


class SlidederWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
       $slide =  BannerSlide::find()
                ->where(['active'=>BannerSlide::is_active])
               ->orderBy('sort_order DESC')
               ->all();
       if($slide != null)
       {
           return $this->render('Slideder',['data'=>$slide]);
       }
        
    }

}
