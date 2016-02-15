<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image_type".
 *
 * @property string $id
 * @property string $object_type
 * @property string $object_name
 * @property string $create_date
 */
class ImageType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object_type', 'object_name', 'create_date'], 'required'],
            [['create_date'], 'integer'],
            [['object_type', 'object_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'object_type' => 'Object Type',
            'object_name' => 'Object Name',
            'create_date' => 'Create Date',
        ];
    }
}
