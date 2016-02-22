<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_clicker".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $test_previous_button
 * @property integer $test_next_button
 * @property integer $test_laser_pointer
 * @property integer $test_battery_1
 * @property integer $test_battery_2
 * @property string $battery_type
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestClicker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_clicker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'test_previous_button', 'test_next_button', 'test_laser_pointer', 'test_battery_1', 'test_battery_2', 'battery_type', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'test_previous_button', 'test_next_button', 'test_laser_pointer', 'test_battery_1', 'test_battery_2', 'created_date', 'update_date', 'status'], 'integer'],
            [['battery_type'], 'string'],
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
            'test_previous_button' => 'Test Previous Button',
            'test_next_button' => 'Test Next Button',
            'test_laser_pointer' => 'Test Laser Pointer',
            'test_battery_1' => 'Test Battery 1',
            'test_battery_2' => 'Test Battery 2',
            'battery_type' => 'Battery Type',
            'created_date' => 'Created Date',
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
    public function getTestPreviousButton()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_previous_button']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestNextButton()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_next_button']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestLaserPointer()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_laser_pointer']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestBattery1()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_battery_1']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestBattery2()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_battery_2']);
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
     * @return String
     */
    public function getPerioD()
    {
        $period = explode ('_', $this->service_period); 
        $start = strtotime($period[0]);
        $end = strtotime($period[1]);
        return date('F jS, Y',$start).' - '.date('F jS, Y',$end) ;
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventorY()
    {
       return $this->hasOne(TblIsInventory::classname(),['form_id'=>'inventory_id']);
    }
}
