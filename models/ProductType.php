<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_type".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $title
 * @property string $description
 * @property string $link
 * @property integer $z_index
 * @property integer $is_menu
 * @property string $olink
 * @property integer $create_date
 * @property integer $active
 */
class ProductType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'create_date'], 'required'],
            [['parent_id', 'z_index', 'is_menu', 'create_date', 'active'], 'integer'],
            [['description'], 'string'],
            [['title', 'link', 'olink'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Danh mục cha',
            'title' => 'Tiêu đề',
            'description' => 'Mô tả',
            'link' => 'Link',
            'z_index' => 'Z Index',
            'is_menu' => 'Is Menu',
            'olink' => 'Olink',
            'create_date' => 'Create Date',
            'active' => 'Hoạt động',
        ];
    }
}
