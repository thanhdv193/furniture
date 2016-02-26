<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property integer $order_id
 * @property integer $product_id
 * @property double $price
 * @property integer $quantity
 * @property double $discount
 * @property string $size
 * @property integer $is_timegold
 * @property integer $product_type
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'price', 'quantity', 'discount', 'size', 'is_timegold'], 'required'],
            [['order_id', 'product_id', 'quantity', 'is_timegold', 'product_type_id'], 'integer'],
            [['price', 'discount'], 'number'],
            [['size'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'discount' => 'Discount',
            'size' => 'Size',
            'is_timegold' => 'Is Timegold',
            'product_type_id' => 'Product Type',
        ];
    }
}
