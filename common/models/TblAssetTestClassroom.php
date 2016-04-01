<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_classroom".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $test_electrical_socket
 * @property integer $test_vga_socket
 * @property integer $test_audio_and_video_ports
 * @property integer $test_ethernet_port_1
 * @property integer $test_ethernet_port_2
 * @property integer $check_retractable_screen
 * @property integer $check_projector_retraction
 * @property integer $check_projector
 * @property integer $check_projector_alignment
 * @property integer $total_projector_bulb_life
 * @property integer $total_bulb_life_used
 * @property integer $total_bulb_life_remaining
 * @property integer $created_date
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestClassroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_classroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'test_electrical_socket', 'test_vga_socket', 'test_audio_and_video_ports', 'test_ethernet_port_1', 'test_ethernet_port_2', 'check_retractable_screen', 'check_projector_retraction', 'check_projector', 'check_projector_alignment', 'total_projector_bulb_life', 'total_bulb_life_used', 'total_bulb_life_remaining', 'created_date', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'test_electrical_socket', 'test_vga_socket', 'test_audio_and_video_ports', 'test_ethernet_port_1', 'test_ethernet_port_2', 'check_retractable_screen', 'check_projector_retraction', 'check_projector', 'check_projector_alignment', 'total_projector_bulb_life', 'total_bulb_life_used', 'total_bulb_life_remaining', 'created_date', 'update_date', 'status'], 'integer'],
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
            'test_electrical_socket' => 'Test Electrical Socket',
            'test_vga_socket' => 'Test Vga Socket',
            'test_audio_and_video_ports' => 'Test Audio And Video Ports',
            'test_ethernet_port_1' => 'Test Ethernet Port 1',
            'test_ethernet_port_2' => 'Test Ethernet Port 2',
            'check_retractable_screen' => 'Check Retractable Screen',
            'check_projector_retraction' => 'Check Projector Retraction',
            'check_projector' => 'Check Projector',
            'check_projector_alignment' => 'Check Projector Alignment',
            'total_projector_bulb_life' => 'Total Projector Bulb Life',
            'total_bulb_life_used' => 'Total Bulb Life Used',
            'total_bulb_life_remaining' => 'Total Bulb Life Remaining',
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
    public function getTestElectricalsocket()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_electrical_socket']);
    }

     /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestVgasocket()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_vga_socket']);
    }

     /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestAVports()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_audio_and_video_ports']);
    }

     /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestEthernetport1()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_ethernet_port_1']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestEthernetport2()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'test_ethernet_port_2']);
    }

     /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckRetractablescreen()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_retractable_screen']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckProjectorRetraction()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_projector_retraction']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckProjector()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_projector']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckProjectorAlignment()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'check_projector_alignment']);
    }

    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTotalProjectorBulbLife()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'total_projector_bulb_life']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTotalBulbLifeUsed()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'total_bulb_life_used']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTotalBulbLifeRemaining()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'total_bulb_life_remaining']);
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
       return $this->hasOne(TblClassroom::classname(),['id'=>'inventory_id']);
    }
        
}
