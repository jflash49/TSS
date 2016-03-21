<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblAssetTestRemote */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-remote-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inventory_id') ?>

    <?= $form->field($model, 'test_power_button') ?>

    <?= $form->field($model, 'enter_menu_options') ?>

    <?= $form->field($model, 'make_screen_blank_button') ?>

    <?php // echo $form->field($model, 'choose_source_button') ?>

    <?php // echo $form->field($model, 'test_battery_1') ?>

    <?php // echo $form->field($model, 'test_battery_2') ?>

    <?php // echo $form->field($model, 'battery_type') ?>

    <?php // echo $form->field($model, 'up_elt_mount_remote') ?>

    <?php // echo $form->field($model, 'down_elt_mount_remote') ?>

    <?php // echo $form->field($model, 'stop_elt_mount_remote') ?>

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
