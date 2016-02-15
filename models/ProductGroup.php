<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_group".
 *
 * @property string $product_group_id
 * @property string $name
 * @property string $title
 * @property string $h1
 * @property string $meta_description
 * @property integer $sort_order
 * @property integer $active
 * @property string $create_date
 */
class ProductGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'create_date'], 'required'],
            [['sort_order', 'active', 'create_date'], 'integer'],
            [['name', 'title', 'h1', 'meta_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_group_id' => 'Product Group ID',
            'name' => 'Name',
            'title' => 'Title',
            'h1' => 'H1',
            'meta_description' => 'Meta Description',
            'sort_order' => 'Sort Order',
            'active' => 'Active',
            'create_date' => 'Create Date',
        ];
    }
}
