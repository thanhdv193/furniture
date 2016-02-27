<?php

namespace app\models;
use app\components\helpers\SystemHelper;
use Yii;

/**
 * This is the model class for table "banner_slide".
 *
 * @property string $banner_id
 * @property string $image
 * @property integer $create_date
 * @property integer $sort_order
 * @property integer $user_id
 * @property integer $active
 */
class BannerSlide extends \yii\db\ActiveRecord
{
    
    const is_active = 1;
    const hide_active = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner_slide';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'create_date', 'user_id'], 'required'],
            [['create_date', 'sort_order', 'user_id', 'active'], 'integer'],            
            [['description'], 'string'],
            [[ 'image'], 'file', 'extensions' => 'PNG,JPG,png,jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'banner_id' => 'Mã',
            'image' => 'Ảnh',
            'create_date' => 'Ngày tạo',
            'description'=>'Mô tả',
            'sort_order' => 'Thứ tự hiển thị',
            'user_id' => 'User ID',
            'active' => 'Trạng thái',
        ];
    }
      public function upload($type)
    {

        if ($this->image)
        {
            $baseName = SystemHelper::convertMaTV($this->image->baseName);    
            $key = time();
            $this->image->saveAs('upload/'.$type.'/' . $key . '_' . $baseName . '.' . $this->image->extension);
            return array(
                'filename' => $key . '_' . $baseName . '.' . $this->image->extension,
                'patch' => 'upload/'.$type.'/'
            );
        } else
        {
            return false;
        }
    }
}
