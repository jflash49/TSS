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
            'type' => 'Type',
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
}
