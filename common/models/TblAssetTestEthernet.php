<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_ethernet".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $test_cable
 * @property integer $check_connector_tag_side
 * @property integer $check_connector_far_side
 * @property integer $length
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestEthernet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_ethernet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'test_cable', 'check_connector_tag_side', 'check_connector_far_side', 'length', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'test_cable', 'check_connector_tag_side', 'check_connector_far_side', 'length', 'created_date', 'update_date', 'status'], 'integer'],
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
            'test_cable' => 'Test Cable',
            'check_connector_tag_side' => 'Check Connector Tag Side',
            'check_connector_far_side' => 'Check Connector Far Side',
            'length' => 'Length',
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
    public function getTestCable()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_cable']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckConnectorTagSide()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_connector_tag_side']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckConnectorFarSide()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_connector_far_side']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusName(){
       $status = $this->getInventorY()->asArray()->one()['status'];
        return TblStatuses::find()->where('id = :status',[':status'=>$status]);
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
