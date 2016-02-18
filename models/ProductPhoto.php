<?php

namespace app\models;

use app\components\helpers\SystemHelper;
use Yii;

/**
 * This is the model class for table "product_photo".
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $filename
 * @property string $photo
 * @property integer $z_index
 * @property integer $create_date
 * @property string $image_path
 * @property string $temp_hash
 * @property integer $is_avatar
 */
class ProductPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'filename'], 'required'],
            [['product_id', 'z_index', 'create_date', 'is_avatar'], 'integer'],
            [['photo', 'image_path'], 'string', 'max' => 250],
            [['filename'], 'file', 'extensions' => 'PNG,JPG,png,jpg', 'maxFiles' => 10],
            [['temp_hash'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'filename' => 'Filename',
            'photo' => 'Photo',
            'z_index' => 'Z Index',
            'create_date' => 'Create Date',
            'image_path' => 'Image Path',
            'temp_hash' => 'Temp Hash',
            'is_avatar' => 'Is Avatar',
        ];
    }
    
    public function upload($type)
    {

        if ($this->filename)
        {    
            $baseName = SystemHelper::convertMaTV($this->filename->baseName);            
            //die("1");
            $this->filename->saveAs('upload/'.$type.'/' . time() . '_' . $baseName . '.' . $this->filename->extension);
            
            return array(
                'filename' => time() . '_' . $baseName . '.' . $this->filename->extension,
                'patch' => 'upload/'.$type.'/'
            );
        } else
        {
            return false;
        }
    }
}
