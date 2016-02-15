<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_category".
 *
 * @property string $product_category_id
 * @property string $name
 * @property string $title
 * @property string $h1
 * @property string $meta_description
 * @property integer $sort_order
 * @property integer $active
 * @property string $create_date
 * @property integer $product_node_id
 */
class ProductCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'create_date', 'product_node_id'], 'required'],
            [['sort_order', 'active', 'create_date', 'product_node_id'], 'integer'],
            [['name', 'title', 'h1', 'meta_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_category_id' => 'Product Category ID',
            'name' => 'Tên chuyên mục',
            'title' => 'Thẻ tiêu đề',
            'h1' => 'H1',
            'meta_description' => 'Thẻ mô tả',
            'sort_order' => 'Sort Order',
            'active' => 'Trạng thái',
            'create_date' => 'Ngày tạo',
            'product_node_id' => 'Nhóm chuyên mục',
        ];
    }
}
