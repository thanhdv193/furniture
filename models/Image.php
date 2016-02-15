<?php

namespace app\models;

use Yii;
use app\components\helpers\SystemHelper;

/**
 * This is the model class for table "image".
 *
 * @property string $id
 * @property string $object_id
 * @property string $object_type
 * @property string $filename
 * @property integer $sort_order
 * @property string $create_date
 * @property string $image_path
 */
class Image extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object_id', 'object_type', 'create_date', 'image_path'], 'required'],
            [['filename'], 'file', 'extensions' => 'PNG,JPG,png,jpg', 'maxFiles' => 4],
            [['object_id', 'sort_order', 'create_date'], 'integer'],
            [['temp_hash','object_type', 'filename', 'image_path'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'object_id' => 'Object ID',
            'object_type' => 'Object Type',
            'filename' => 'Filename',
            'sort_order' => 'Sort Order',
            'create_date' => 'Create Date',
            'image_path' => 'Image Path',
        ];
    }

    public function upload($type)
    {

        if ($this->filename)
        {
            $baseName = SystemHelper::convertMaTV($this->filename->baseName);            
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
