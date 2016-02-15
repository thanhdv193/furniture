<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property string $id
 * @property string $parent_id
 * @property string $name
 * @property string $route
 * @property string $menu_type
 * @property string $icon
 * @property string $sort_order
 * @property string $added_by_ext
 * @property string $rbac_check
 * @property string $css_class
 * @property string $translation_category
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'sort_order'], 'integer'],
            [['name', 'route', 'menu_type'], 'required'],
            [['name', 'route', 'menu_type', 'icon', 'added_by_ext', 'css_class'], 'string', 'max' => 255],
            [['rbac_check'], 'string', 'max' => 64],
            [['translation_category'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'route' => 'Route',
            'menu_type' => 'Menu Type',
            'icon' => 'Icon',
            'sort_order' => 'Sort Order',
            'added_by_ext' => 'Added By Ext',
            'rbac_check' => 'Rbac Check',
            'css_class' => 'Css Class',
            'translation_category' => 'Translation Category',
        ];
    }
}
