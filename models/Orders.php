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
            [['user_id', 'name', 'address', 'email', 'phone', 'create_date', 'cust_note', 'is_process'], 'required'],
            [['user_id', 'is_process'], 'integer'],
            [['create_date'], 'safe'],
            [['name', 'address', 'email', 'phone', 'cust_note'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'address' => 'Address',
            'email' => 'Email',
            'phone' => 'Phone',
            'create_date' => 'Create Date',
            'cust_note' => 'Cust Note',
            'is_process' => 'Is Process',
        ];
    }
}
