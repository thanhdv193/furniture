<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property string $loc_id
 * @property string $name
 * @property string $address
 * @property double $lat
 * @property double $lng
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'address'], 'required'],
         
            [['lat', 'lng'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'loc_id' => 'Loc ID',
            'name' => 'Name',
            'address' => 'Address',
            'lat' => 'Lat',
            'lng' => 'Lng',
        ];
    }
}
