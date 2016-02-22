<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestClicker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-clicker-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'inventory_id')->textInput() ?-->

    <?= $form->field($model, 'test_previous_button')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>


    <?= $form->field($model, 'test_next_button')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>


    <?= $form->field($model, 'test_laser_pointer')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>


    <?= $form->field($model, 'test_battery_1')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>


    <?= $form->field($model, 'test_battery_2')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>


    <?= $form->field($model, 'battery_type')->textarea(['rows' => 6]) ?>

    <!--?= $form->field($model, 'created_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?-->

    <!--?= $form->field($model, 'update_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?-->

    <!--?= $form->field($model, 'service_period')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'status')->textInput() ?-->

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
