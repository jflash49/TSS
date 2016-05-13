<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_asset_loan_status".
 *
 * @property integer $id
 * @property integer $entry_id
 * @property integer $inventory_id
 * @property integer $received_by
 * @property integer $status
 */
class TblAssetLoanStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_asset_loan_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['entry_id', 'inventory_id', 'status'], 'required'],
            [['entry_id', 'inventory_id', 'received_by', 'status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'entry_id' => 'Entry ID',
            'inventory_id' => 'Inventory ID',
            'received_by' => 'Received By',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAssetLoan()
    {
        return $this ->hasOne(TblAssetLoan::className(),['entry_id'=>'entry_id']);
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
     * @return \yii\db\ActiveQuery
     */
    public function getUseR()
    {
        return $this ->hasOne(User::className(),['id'=>'received_by']);
    }

    /**
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatuS()
    {
       return $this->hasOne(TblStatuses::classname(),['id'=>'status']);
    }
}
