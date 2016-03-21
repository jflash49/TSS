<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestLaptop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-laptop-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?= $form->field($model, 'update_standard_software')->dropDownList(
        [ '15'=>'Updated', '16'=>'Not Updated'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'apply_os_patches')->dropDownList(
        [ '15'=>'Updated', '16'=>'Not Updated'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'update_antivirus')->dropDownList(
        [ '15'=>'Updated', '16'=>'Not Updated'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'update_anti_spyware')->dropDownList(
        [ '15'=>'Updated', '16'=>'Not Updated'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'run_anti_virus_scan')->dropDownList(
        [ '15'=>'Updated', '16'=>'Not Updated'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'run_anti_spyware_scan')->dropDownList(
        [ '15'=>'Updated', '16'=>'Not Updated'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'run_chkdsk')->dropDownList(
        [ '15'=>'Updated', '16'=>'Not Updated'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'run_disk_cleanup')->dropDownList(
        [ '15'=>'Updated', '16'=>'Not Updated'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'run_disk_defragmenter')->dropDownList(
        [ '15'=>'Updated', '16'=>'Not Updated'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_all_buttons')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_touchpad')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_volume_buttons')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_internal_mic')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_internal_speakers')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'check_all_ports')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'test_adapter')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'charger_laptop')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'turn_off_sleep')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'clean_laptop_monthly')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
