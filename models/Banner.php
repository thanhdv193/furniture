<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property string $banner_id
 * @property string $image_type_id
 * @property string $image_id
 * @property integer $created_at
 * @property integer $sort_order
 * @property integer $active
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_type_id', 'created_at'], 'required'],
            [['image_id'], 'file','extensions' => 'PNG,JPG,png,jpg', 'maxFiles' => 4],
            [['image_type_id', 'created_at', 'sort_order', 'active'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            
            'banner_id' => 'Banner ID',
            'image_type_id' => 'Image Type ID',
            'image_id' => 'Image ID',
            'created_at' => 'Created At',
            'sort_order' => 'Sort Order',
            'active' => 'Active',
        ];
    }
    public function getImage() {
        return $this->hasOne(Image::className(), ['object_id' => 'banner_id']);
    }
    public function getImage_type() {
        return $this->hasOne(ImageType::className(), ['id' => 'image_type_id']);
    }
}
