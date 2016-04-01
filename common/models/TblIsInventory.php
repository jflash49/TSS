<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_is_inventory".
 *
 * @property integer $form_id
 * @property integer $user_id
 * @property integer $type
 * @property string $tag
 * @property integer $closed_by
 * @property integer $start_date
 * @property integer $end_date
 * @property integer $assigned_to
 * @property integer $last_date_serviced
 * @property integer $status
 * @property string $inventory
 * @property string $purpose
 * @property string $comments
 */
class TblIsInventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_is_inventory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'type', 'tag', 'start_date', 'last_date_serviced', 'status', 'inventory', 'purpose', 'comments'], 'required'],
            [['user_id', 'type', 'closed_by', 'start_date', 'end_date', 'assigned_to', 'last_date_serviced', 'status'], 'integer'],
            [['tag'], 'string', 'max' => 15],
            [['inventory'], 'string', 'max' => 11],
            [['purpose'], 'string', 'max' => 50],
            [['comments'], 'string', 'max' => 200]
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
            'type' => 'Type',
            'tag' => 'Tag',
            'closed_by' => 'Closed By',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'assigned_to' => 'Assigned To',
            'last_date_serviced' => 'Last Date Serviced',
            'status' => 'Status',
            'inventory' => 'Inventory',
            'purpose' => 'Purpose',
            'comments' => 'Comments',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUseR()
    {
        return $this ->hasOne(User::className(),['id'=>'user_id']);
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
     * @return \yii\db\ActiveQuery
     */
    public function getTypE()
    {
       return $this->hasOne(TblInventoryType::classname(),['id'=>'type']);
    }
}
