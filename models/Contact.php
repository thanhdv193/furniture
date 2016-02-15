<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property string $contact_id
 * @property string $user_id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $description
 * @property integer $create_date
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name','phone'], 'required'],
            [['user_id', 'create_date'], 'integer'],
            ['email', 'email','message'=>'email không đúng định dạng.'],
            [['name', 'phone', 'email', 'description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'user_id' => 'User ID',
            'name' => 'Họ tên',
            'phone' => 'Số điện thoại',
            'email' => 'Email',
            'description' => 'Tin nhắn',
            'create_date' => 'Create Date',
        ];
    }
}
