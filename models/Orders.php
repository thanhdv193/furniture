<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $create_date
 * @property string $cust_note
 * @property integer $is_process
 */
class Orders extends \yii\db\ActiveRecord
{
    
    const is_process = 0;
    const is_proceed = 1;
    const is_watting = 2;
    const order_success = 1;
    const order_false = 0;
    
    const order_process = 0; // chưa xử lý
    const order_process_watting = 1; // đang đợi
    const order_process_done = 2; // đã xử lý
    const order_all = 3; // tất cả
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'address', 'phone', 'create_date', 'cust_note', 'is_process'], 'required'],
            [['create_date','user_id', 'is_process'], 'integer'],            
            ['email', 'filter', 'filter' => 'trim'],            
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => Yii::t('app', 'email')],
            [['name', 'address', 'phone', 'cust_note'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã đơn hàng',
            'user_id' => 'Loại khách hàng',
            'name' => 'Họ tên',
            'address' => 'Địa chỉ',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'create_date' => 'Ngày tạo',
            'cust_note' => 'Cust Note',
            'is_process' => 'Tình trạng',
        ];
    }
}
