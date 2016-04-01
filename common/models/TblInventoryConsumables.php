<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_inventory_consumables".
 *
 * @property integer $id
 * @property string $device_type
 * @property string $consumable
 * @property integer $optimal_storage_level
 * @property double $storage_point
 * @property integer $current_stock
 */
class TblInventoryConsumables extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_inventory_consumables';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['device_type', 'consumable', 'optimal_storage_level', 'storage_point'], 'required'],
            [['consumable'], 'string'],
            [['optimal_storage_level', 'current_stock'], 'integer'],
            [['storage_point'], 'number'],
            [['device_type'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'device_type' => 'Device Type',
            'consumable' => 'Consumable',
            'optimal_storage_level' => 'Optimal Storage Level',
            'storage_point' => 'Storage Point',
            'current_stock' => 'Current Stock',
        ];
    }

    /**
    *
    *   @return integer
    */
    public function getReorderQuantity(){
        return ($this->optimal_storage_level - $this->current_stock > 0 ? $this->optimal_storage_level - $this->current_stock :0);
    }
}
