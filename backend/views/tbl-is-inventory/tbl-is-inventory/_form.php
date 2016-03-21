<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TblInventoryType;

/* @var $this yii\web\View */
/* @var $model common\models\TblIsInventory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-is-inventory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList(
                            ArrayHelper::map(TblInventoryType::find()->all(), 'id','name'),
                            ['prompt'=>'Select Inventory Item']
                            )?>

    <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'closed_by')->textInput() ?>

    <?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'end_date')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'assigned_to')->textInput() ?>

    <?= $form->field($model, 'last_date_serviced')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'inventory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'purpose')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
