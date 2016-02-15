<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "log_history".
 *
 * @property string $log_id
 * @property string $id_user
 * @property string $action
 * @property string $page_url
 * @property string $ip_address
 * @property integer $created_at
 */
class LogHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'log_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'action', 'page_url', 'ip_address', 'created_at'], 'required'],
            [['id_user', 'created_at'], 'integer'],
            [['action', 'page_url', 'ip_address'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => 'Log ID',
            'id_user' => 'Id User',
            'action' => 'Action',
            'page_url' => 'Page Url',
            'ip_address' => 'Ip Address',
            'created_at' => 'Created At',
        ];
    }
}
