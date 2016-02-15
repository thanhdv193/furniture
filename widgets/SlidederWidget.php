<?php

namespace app\widgets;

use yii\base\Widget;
use app\models\Banner;


class SlidederWidget extends Widget
{

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $slide = Banner::find()->joinWith('image')->where(['active'=>1])->asArray()->all();
        //echo '<pre>'; var_dump($slide); die;
        return $this->render('Slideder',['data'=>$slide]);
    }

}
