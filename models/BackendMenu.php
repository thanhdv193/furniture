<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "backend_menu".
 *
 * @property string $id
 * @property string $parent_id
 * @property string $name
 * @property string $route
 * @property string $icon
 * @property string $sort_order
 * @property string $added_by_ext
 * @property string $rbac_check
 * @property string $css_class
 * @property string $translation_category
 */
class BackendMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'backend_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'sort_order'], 'integer'],
            [['name', 'route'], 'required'],
            [['name', 'route', 'added_by_ext', 'css_class'], 'string', 'max' => 255],
            [['icon'], 'file','extensions' => 'PNG,JPG,png,jpg', 'maxFiles' => 4],
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
            'icon' => 'Icon',
            'sort_order' => 'Sort Order',
            'added_by_ext' => 'Added By Ext',
            'rbac_check' => 'Rbac Check',
            'css_class' => 'Css Class',
            'translation_category' => 'Translation Category',
        ];
    }
    
    public function upload() {
       
        if ($this->icon) {                 
            $this->icon->saveAs('upload/backend/menu/' . time() .'_'.iconv('UTF-8', 'CP1258', $this->icon->baseName) . '.' . $this->icon->extension);
            return time() .'_'.iconv('UTF-8', 'CP1258', $this->icon->baseName) . '.' . $this->icon->extension;
        } else {
            return false;
        }
    }
}
