<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_cable_lock".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $check_keys
 * @property integer $check_for_damage
 * @property integer $check_keys_status
 * @property integer $check_for_damage_status
 * @property integer $date_created
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestCableLock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_cable_lock';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'check_keys', 'check_for_damage', 'check_keys_status', 'check_for_damage_status', 'date_created', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'check_keys', 'check_for_damage', 'check_keys_status', 'check_for_damage_status', 'date_created', 'update_date', 'status'], 'integer'],
            [['service_period'], 'string', 'max' => 30],
            [['comment'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inventory_id' => 'Inventory ID',
            'check_keys' => 'Check Keys',
            'check_for_damage' => 'Check For Damage',
            'check_keys_status' => 'Check Keys Status',
            'check_for_damage_status' => 'Check For Damage Status',
            'date_created' => 'Date Created',
            'update_date' => 'Update Date',
            'service_period' => 'Service Period',
            'status' => 'Status',
            'comment' => 'Comment',
        ];
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeyStatus()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_keys']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDamageStatus()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_for_damage']);
    }

    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeyStatuses()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_keys_status']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDamageStatuses()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_for_damage_status']);
    }

    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceStatus()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }

    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatuS()
    {
       return $this->hasOne(TblAssetLoan::classname(),['entry_id'=>'inventory_id']);
    }


    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventorY()
    {
       return $this->hasOne(TblIsInventory::classname(),['form_id'=>'inventory_id']);
    }

   /**
     * @return String
     */
    public function getPerioD()
    {
        $period = explode ('_', $this->service_period); 
        $start = strtotime($period[0]);
        $end = strtotime($period[1]);
        return date('F jS, Y',$start).' - '.date('F jS, Y',$end) ;
    }
}
