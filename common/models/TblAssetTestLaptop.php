<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_test_laptop".
 *
 * @property integer $id
 * @property integer $inventory_id
 * @property integer $update_standard_software
 * @property integer $apply_os_patches
 * @property integer $update_antivirus
 * @property integer $update_anti_spyware
 * @property integer $run_anti_virus_scan
 * @property integer $run_anti_spyware_scan
 * @property integer $run_chkdsk
 * @property integer $run_disk_cleanup
 * @property integer $run_disk_defragmenter
 * @property integer $check_all_buttons
 * @property integer $check_touchpad
 * @property integer $check_volume_buttons
 * @property integer $check_internal_mic
 * @property integer $check_internal_speakers
 * @property integer $check_all_ports
 * @property integer $test_adapter
 * @property integer $charger_laptop
 * @property integer $turn_off_sleep
 * @property integer $clean_laptop_monthly
 * @property integer $date_created
 * @property integer $update_date
 * @property string $service_period
 * @property integer $status
 * @property string $comment
 */
class TblAssetTestLaptop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_test_laptop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inventory_id', 'update_standard_software', 'apply_os_patches', 'update_antivirus', 'update_anti_spyware', 'run_anti_virus_scan', 'run_anti_spyware_scan', 'run_chkdsk', 'run_disk_cleanup', 'run_disk_defragmenter', 'check_all_buttons', 'check_touchpad', 'check_volume_buttons', 'check_internal_mic', 'check_internal_speakers', 'check_all_ports', 'test_adapter', 'charger_laptop', 'turn_off_sleep', 'clean_laptop_monthly', 'date_created', 'update_date', 'service_period', 'status', 'comment'], 'required'],
            [['inventory_id', 'update_standard_software', 'apply_os_patches', 'update_antivirus', 'update_anti_spyware', 'run_anti_virus_scan', 'run_anti_spyware_scan', 'run_chkdsk', 'run_disk_cleanup', 'run_disk_defragmenter', 'check_all_buttons', 'check_touchpad', 'check_volume_buttons', 'check_internal_mic', 'check_internal_speakers', 'check_all_ports', 'test_adapter', 'charger_laptop', 'turn_off_sleep', 'clean_laptop_monthly', 'date_created', 'update_date', 'status'], 'integer'],
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
            'update_standard_software' => 'Update Standard Software',
            'apply_os_patches' => 'Apply Os Patches',
            'update_antivirus' => 'Update Antivirus',
            'update_anti_spyware' => 'Update Anti Spyware',
            'run_anti_virus_scan' => 'Run Anti Virus Scan',
            'run_anti_spyware_scan' => 'Run Anti Spyware Scan',
            'run_chkdsk' => 'Run Chkdsk',
            'run_disk_cleanup' => 'Run Disk Cleanup',
            'run_disk_defragmenter' => 'Run Disk Defragmenter',
            'check_all_buttons' => 'Check All Buttons',
            'check_touchpad' => 'Check Touchpad',
            'check_volume_buttons' => 'Check Volume Buttons',
            'check_internal_mic' => 'Check Internal Mic',
            'check_internal_speakers' => 'Check Internal Speakers',
            'check_all_ports' => 'Check All Ports',
            'test_adapter' => 'Test Adapter',
            'charger_laptop' => 'Charger Laptop',
            'turn_off_sleep' => 'Turn Off Sleep',
            'clean_laptop_monthly' => 'Clean Laptop Monthly',
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
    public function getUpdateStandardSoftware()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'update_standard_software']);
    }

    /**
     * @return String
     */
    public function getApplyOsPatches()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'apply_os_patches']);
    
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUpdateAntiVirus()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'update_antivirus']);
    }

    /**
     * @return String
     */
    public function getUpdateAntiSpyware()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'update_anti_spyware']);
    }

    /**
     * @return String
     */
    public function getRunAntiVirusScan()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'run_anti_virus_scan']);
    }
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRunAntiSpywareScan()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'run_anti_spyware_scan']);
    }

    /**
     * @return String
     */
    public function getRunCheckDisk()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'run_chkdsk']);
    }
    /**
     * @return String
     */
    public function getRunDiskCleanup()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'run_disk_cleanup']);
    }
    /**
     * @return String
     */
    public function getRunDiskDefragmenter()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'run_disk_defragmenter']);
    }
    /**
     * @return String
     */
    public function getCheckAllButtons()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'check_all_buttons']);
    }
    /**
     * @return String
     */
    public function getCheckTouchPad()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'check_touchpad']);
    }
    /**
     * @return String
     */
    public function getCheckVolumeButtons()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'check_volume_buttons']);
    }
    
    /**
     * @return String
     */
    public function getCheckInternalMic()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'check_internal_mic']);
    }

    /**
     * @return String
     */
    public function getCheckInternalSpeakers()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'check_internal_speakers']);
    }

    /**
     * @return String
     */
    public function getCheckAllPorts()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'check_all_ports']);
    }

    /**
     * @return String
     */
    public function getTestAdapter()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'test_adapter']);
    }

    /**
     * @return String
     */
    public function getChargerLaptop()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'charger_laptop']);
    }

    /**
     * @return String
     */
    public function getTurnOffSleep()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'turn_off_sleep']);
    }
    /**
     * @return String
     */
    public function getCleanLaptopMonthly()
    {
        return $this->hasOne(TblStatuses::classname(),['id'=>'clean_laptop_monthly']);
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
