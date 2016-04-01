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


    <?= $form->field($model, 'type')->dropDownList(
                            ArrayHelper::map(TblInventoryType::find()->all(), 'id','name'),
                            ['prompt'=>'Select Inventory Item']
                            )?>

    <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

   
    <?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>
    <?= $form->field($model, 'closed_by')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList(
        ['1'=>'Available', '6'=>'Not Available','8'=>'Missing'],
        ['prompt'=>'Select .. . ']); ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
