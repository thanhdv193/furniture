<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_category".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $link
 * @property integer $is_new
 * @property integer $is_menu
 * @property integer $z_index
 * @property string $olink
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keyword
 */
class ProductCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['description'], 'string'],
            [['create_date','active','is_new', 'is_menu', 'z_index'], 'integer'],
            [['title', 'link', 'olink', 'seo_title', 'seo_description', 'seo_keyword'], 'string', 'max' => 250]
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
            'description' => 'Mô tả',
            'link' => 'Link',
            'is_new' => 'Is New',
            'is_menu' => 'Is Menu',
            'z_index' => 'Z Index',
            'olink' => 'Olink',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'seo_keyword' => 'Seo Keyword',
            'active'=>'Hoạt động'
        ];
    }
}
