<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\BannerSlide;


class WrapperBannersWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
//       $slide =  BannerSlide::find()
//                ->where(['active'=>BannerSlide::is_active])
//               ->orderBy('sort_order DESC')
//               ->all();
//       if($slide != null)
//       {
//           return $this->render('Slideder',['data'=>$slide]);
//       }
       return $this->render('WrapperBanners',['data'=>null]);
        
    }

}
