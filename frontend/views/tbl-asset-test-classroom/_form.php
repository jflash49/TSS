<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestClassroom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-classroom-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'inventory_id')->textInput() ?-->

    <?= $form->field($model, 'test_electrical_socket')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace','19'=>'Not Applicable'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'test_vga_socket')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace','19'=>'Not Applicable'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'test_audio_and_video_ports')->dropDownList(
       ['12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace','19'=>'Not Applicable'],
       ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'test_ethernet_port_1')->dropDownList(
        ['12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace','19'=>'Not Applicable'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'test_ethernet_port_2')->dropDownList(
        ['12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace','19'=>'Not Applicable'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_retractable_screen')->dropDownList(
        ['12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace','19'=>'Not Applicable'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_projector_retraction')->dropDownList(
        ['12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace','19'=>'Not Applicable'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_projector')->dropDownList(
        ['12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace','19'=>'Not Applicable'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_projector_alignment')->dropDownList(
        ['12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace','19'=>'Not Applicable'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'total_projector_bulb_life')->textInput()?>

    <?= $form->field($model, 'total_bulb_life_used')->textInput() ?>

    <?= $form->field($model, 'total_bulb_life_remaining')->textInput() ?>

    <!--?= $form->field($model, 'created_date')->textInput() ?-->

    <!--?= $form->field($model, 'update_date')->textInput() ?-->

    <!--?= $form->field($model, 'service_period')->textInput(['maxlength' => true]) ?-->

    <!--?= $form->field($model, 'status')->textInput() ?-->

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
