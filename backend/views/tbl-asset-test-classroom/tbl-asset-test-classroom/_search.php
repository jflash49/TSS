<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblAssetTestClassroom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-classroom-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inventory_id') ?>

    <?= $form->field($model, 'test_electrical_socket') ?>

    <?= $form->field($model, 'test_vga_socket') ?>

    <?= $form->field($model, 'test_audio_and_video_ports') ?>

    <?php // echo $form->field($model, 'test_ethernet_port_1') ?>

    <?php // echo $form->field($model, 'test_ethernet_port_2') ?>

    <?php // echo $form->field($model, 'check_retractable_screen') ?>

    <?php // echo $form->field($model, 'check_projector_retraction') ?>

    <?php // echo $form->field($model, 'check_projector') ?>

    <?php // echo $form->field($model, 'check_projector_alignment') ?>

    <?php // echo $form->field($model, 'total_projector_bulb_life') ?>

    <?php // echo $form->field($model, 'total_bulb_life_used') ?>

    <?php // echo $form->field($model, 'total_bulb_life_remaining') ?>

    <?php // echo $form->field($model, 'created_date') ?>

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
