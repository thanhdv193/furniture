<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auth_group".
 *
 * @property integer $id
 * @property string $group_name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $status
 * @property string $description
 * @property string $alias
 */
class AuthGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_name', 'created_at', 'updated_at', 'description', 'alias'], 'required'],
            [['created_at', 'updated_at', 'status'], 'integer'],
            [['group_name', 'description', 'alias'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Mã',
            'group_name' => 'Tên nhóm quyền',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
            'status' => 'Trạng thái',
            'description' => 'Mô tả',
            'alias' => 'Alias',
        ];
    }
}
