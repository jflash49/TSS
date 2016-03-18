<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_mouse".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $type
 * @property integer $check_left_button
 * @property integer $check_right_button
 * @property integer $check_scroll_wheel
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestMouse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_mouse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'type', 'check_left_button', 'check_right_button', 'check_scroll_wheel', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'type', 'check_left_button', 'check_right_button', 'check_scroll_wheel', 'created_date', 'update_date', 'status'], 'integer'],
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
            'type' => 'Type', // either 1 or 2
            'check_left_button' => 'Check Left Button',
            'check_right_button' => 'Check Right Button',
            'check_scroll_wheel' => 'Check Scroll Wheel',
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
    public function getCheckLeftButton()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_left_button']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckRightButton()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_right_button']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckScrollWheel()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_scroll_wheel']);
    }


    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicestatus()
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
