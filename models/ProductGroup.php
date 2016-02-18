<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_group".
 *
 * @property integer $id
 * @property string $title
 * @property integer $z_index
 * @property integer $create_date
 * @property integer $active
 */
class ProductGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'create_date', 'active'], 'required'],
            [['z_index', 'create_date', 'active'], 'integer'],
            [['title'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tiêu đề',
            'z_index' => 'Z Index',
            'create_date' => 'Create Date',
            'active' => 'Hoạt động',
        ];
    }
}
