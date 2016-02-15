<?php

namespace app\models;

use Yii;
use app\components\helpers\SystemHelper;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property string $product_id
 * @property string $product_category_id
 * @property string $product_group_id
 * @property string $product_node_id
 * @property string $name
 * @property string $title
 * @property string $h1
 * @property string $meta_description
 * @property string $view_count
 * @property string $content
 * @property string $announce
 * @property integer $sort_order
 * @property integer $active
 * @property double $price
 * @property double $old_price
 * @property string $quantity_current
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_category_id', 'name', 'view_count', 'quantity_current'], 'required'],
            [['create_date','product_category_id', 'product_group_id', 'view_count', 'sort_order', 'active', 'quantity_current'], 'integer'],
            [['image'], 'file','extensions' => 'PNG,JPG,png,jpg', 'maxFiles' => 4],
            [['content', 'announce'], 'string'],
            [['price', 'old_price'], 'number'],
            [['name', 'title', 'h1', 'meta_description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Mã',
            'product_category_id' => 'Chuyên mục',
            'product_group_id' => 'Nhóm sản phẩm',            
            'name' => 'Tên sản phẩm',
            'title' => 'Thẻ tiêu đề',
            'h1' => 'Thẻ H1',
            'meta_description' => 'Thẻ mô tả',
            'view_count' => 'View Count',
            'content' => 'Nội dung',
            'announce' => 'Announce',
            'sort_order' => 'Sort Order',
            'active' => 'Trạng thái',
            'price' => 'Giá',
            'old_price' => 'Giá',
            'quantity_current' => 'Số lượng',
        ];
    }
    
    public function getProduct_category() {
        return $this->hasOne(ProductCategory::className(), ['product_category_id' => 'product_category_id']);
    }
    public function getProduct_group() {
        return $this->hasOne(ProductGroup::className(), ['product_group_id' => 'product_group_id']);
    }
    
}
