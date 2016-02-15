<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property string $cart_id
 * @property string $product_id
 * @property string $user_id
 * @property string $user_name
 * @property integer $create_date
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'user_id', 'user_name', 'create_date'], 'required'],
            [['product_id', 'user_id', 'create_date'], 'integer'],
            [['user_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cart_id' => 'Cart ID',
            'product_id' => 'Product ID',
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'create_date' => 'Create Date',
        ];
    }
}
