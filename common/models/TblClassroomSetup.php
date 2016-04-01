<?php

namespace common\models;
use common\models\TblClassroom;
use Yii;

/**
 * This is the model class for table "tbl_classroom_setup".
 *
 * @property integer $form_id
 * @property integer $user_id
 * @property integer $form_type
 * @property integer $setup_type
 * @property string $setup_other
 * @property integer $closed_by
 * @property string $start_date
 * @property string $end_date
 * @property string $update_date
 * @property integer $assigned_to
 * @property string $inventory
 * @property string $comments
 * @property integer $classroom
 * @property string $classroom_other
 * @property string $course_code
 * @property string $setup_time
 * @property string $pickup_time
 * @property string $scheduled_start_time
 * @property string $scheduled_end_time
 * @property integer $status
 */
class TblClassroomSetup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_classroom_setup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'form_type', 'setup_type', 'setup_other', 'start_date', 'end_date', 'update_date', 'assigned_to', 'inventory', 'comments', 'classroom', 'classroom_other', 'course_code', 'setup_time', 'pickup_time', 'scheduled_start_time', 'scheduled_end_time', 'status'], 'required'],
            [['user_id', 'form_type', 'setup_type', 'closed_by', 'assigned_to', 'classroom', 'status'], 'integer'],
            [['start_date', 'end_date', 'update_date', 'setup_time', 'pickup_time', 'scheduled_start_time', 'scheduled_end_time'], 'safe'],
            [['setup_other', 'inventory', 'classroom_other'], 'string', 'max' => 20],
            [['comments'], 'string', 'max' => 200],
            [['course_code'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'form_id' => 'Form ID',
            'user_id' => 'User ID',
            'form_type' => 'Form Type',
            'setup_type' => 'Setup Type',
            'setup_other' => 'Setup Other',
            'closed_by' => 'Closed By',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'update_date' => 'Update Date',
            'assigned_to' => 'Assigned To',
            'inventory' => 'Inventory',
            'comments' => 'Comments',
            'classroom' => 'Classroom',
            'classroom_other' => 'Classroom Other',
            'course_code' => 'Course Code',
            'setup_time' => 'Setup Time',
            'pickup_time' => 'Pickup Time',
            'scheduled_start_time' => 'Scheduled Start Time',
            'scheduled_end_time' => 'Scheduled End Time',
            'status' => 'Status',
        ];
    }

    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClassroom()
    {
       return $this->hasOne(TblClassroom::classname(),['id'=>'classroom']);
    }

    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClassroomName()
    {
        $name = $this->getClassroom()->asArray()->all()[0]['classroom_name'];
       return $name;
    }
    
    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatuS()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }
   
   /**
   *
   * @return String
   */
   public function getInventoryItems(){
    return " My List - should include all inventory items, that match..";
   }

}
