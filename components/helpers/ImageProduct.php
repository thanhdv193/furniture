<?php

namespace app\components\helpers;

use Yii;
use app\models\ProductPhoto;

class ImageProduct
{
    public static function Image($product_id = 0, $start = 0, $limit = 1)
        {
        $list = ProductPhoto::find()
                ->where(['product_id' => $product_id])
                ->offset($start)
                ->limit($limit)
                ->asArray()
                ->all();
        if ($list == null)
            {
            echo '<img class="img-responsive em-alt-org em-lazy-loaded" src="upload/images/product/350x350/clothing_sp5_1.jpg" data-original="upload/images/product/350x350/clothing_sp5_1.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">';
            echo '<img class="em-alt-hover img-responsive em-lazy-loaded" src="upload/images/product/350x350/clothing_sp5_2.jpg" data-original="upload/images/product/350x350/clothing_sp5_2.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">';
            } else
            {
            foreach ($list as $key => $value)
                {
                if ($key == 1)
                    {
                    echo '<img class="img-responsive em-alt-org em-lazy-loaded" src="' .Url::base('http'). $value['image_path'] . '' . $value['filename'] . '" data-original="upload/images/product/350x350/clothing_sp5_1.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">';
                    } else
                    {
                    echo '<img class="em-alt-hover img-responsive em-lazy-loaded" src="' . $value['image_path'] . '' . $value['filename'] . '" data-original="upload/images/product/350x350/clothing_sp5_2.jpg" alt=" Embellished Mirror Pastel" height="350" width="350">';
                    }
                }
            }
        }

}
