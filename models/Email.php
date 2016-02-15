<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "r_email".
 *
 * @property string $email_id
 * @property string $id_user
 * @property string $account_email
 * @property string $password_email
 * @property integer $email_status
 * @property integer $created_at
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'r_email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'account_email', 'password_email', 'email_status', 'created_at'], 'required'],
            [['id_user', 'email_status', 'created_at'], 'integer'],
            [['account_email', 'password_email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email_id' => 'Email ID',
            'id_user' => 'Id User',
            'account_email' => 'Account Email',
            'password_email' => 'Password Email',
            'email_status' => 'Email Status',
            'created_at' => 'Created At',
        ];
    }
}
