<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $product_group_id
 * @property integer $product_type_id
 * @property integer $product_category_id
 * @property string $title
 * @property string $link
 * @property string $olink
 * @property string $olink2
 * @property string $description
 * @property string $content
 * @property string $photo
 * @property string $seo_title
 * @property string $seo_keyword
 * @property string $seo_description
 * @property string $seo_photo_alt
 * @property integer $is_hethang
 * @property integer $is_new
 * @property integer $is_top
 * @property string $create_date
 * @property integer $is_active
 * @property double $discount
 * @property string $discount_bonus
 * @property double $price
 * @property string $time_left
 * @property integer $z_index
 * @property string $code_product
 * @property string $size
 * @property string $origin
 * @property string $tags
 * @property double $old_price
 * @property integer $quantity_current
 * @property integer $view_count
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
            [['price', 'product_type_id', 'product_category_id', 'title','create_date'], 'required'],
            [['product_group_id', 'product_type_id', 'product_category_id', 'is_hethang', 'is_new', 'is_top', 'is_active', 'time_left', 'z_index', 'quantity_current', 'view_count'], 'integer'],
            [['description', 'content', 'tags'], 'string'],
            [['create_date'], 'safe'],
            [['discount', 'price', 'old_price'], 'number'],
            [['title', 'link', 'olink', 'olink2', 'photo', 'seo_photo_alt', 'discount_bonus', 'code_product', 'size', 'origin'], 'string', 'max' => 250],
            [['seo_title', 'seo_keyword', 'seo_description'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_group_id' => 'Nhóm sản phẩm',
            'product_type_id' => 'Chuyên mục',
            'product_category_id' => 'Product Category ID',
            'title' => 'Tên sản phẩm',
            'link' => 'Link',
            'olink' => 'Olink',
            'olink2' => 'Olink2',
            'description' => 'Mô tả',
            'content' => 'Nội dung',
            'photo' => 'Ảnh sản phẩm',
            'seo_title' => 'Seo Title',
            'seo_keyword' => 'Seo Keyword',
            'seo_description' => 'Seo Description',
            'seo_photo_alt' => 'Seo Photo Alt',
            'is_hethang' => 'Tình trạng',
            'is_new' => 'Is New',
            'is_top' => 'Is Top',
            'create_date' => 'Create Date',
            'is_active' => 'Trạng thái',
            'discount' => 'Discount',
            'discount_bonus' => 'Discount Bonus',
            'price' => 'Giá',
            'time_left' => 'Time Left',
            'z_index' => 'Z Index',
            'code_product' => 'Code Product',
            'size' => 'Kích thước',
            'origin' => 'Origin',
            'tags' => 'Tags',
            'old_price' => 'Giá cũ',
            'quantity_current' => 'Số lượng',
            'view_count' => 'View Count',
        ];
    }
}
