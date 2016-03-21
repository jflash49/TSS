<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblAssetTestLaptop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-laptop-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inventory_id') ?>

    <?= $form->field($model, 'update_standard_software') ?>

    <?= $form->field($model, 'apply_os_patches') ?>

    <?= $form->field($model, 'update_antivirus') ?>

    <?php // echo $form->field($model, 'update_anti_spyware') ?>

    <?php // echo $form->field($model, 'run_anti_virus_scan') ?>

    <?php // echo $form->field($model, 'run_anti_spyware_scan') ?>

    <?php // echo $form->field($model, 'run_chkdsk') ?>

    <?php // echo $form->field($model, 'run_disk_cleanup') ?>

    <?php // echo $form->field($model, 'run_disk_defragmenter') ?>

    <?php // echo $form->field($model, 'check_all_buttons') ?>

    <?php // echo $form->field($model, 'check_touchpad') ?>

    <?php // echo $form->field($model, 'check_volume_buttons') ?>

    <?php // echo $form->field($model, 'check_internal_mic') ?>

    <?php // echo $form->field($model, 'check_internal_speakers') ?>

    <?php // echo $form->field($model, 'check_all_ports') ?>

    <?php // echo $form->field($model, 'test_adapter') ?>

    <?php // echo $form->field($model, 'charger_laptop') ?>

    <?php // echo $form->field($model, 'turn_off_sleep') ?>

    <?php // echo $form->field($model, 'clean_laptop_monthly') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'service_period') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
