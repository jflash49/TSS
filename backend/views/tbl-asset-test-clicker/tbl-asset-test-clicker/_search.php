<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblAssetTestClicker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-clicker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inventory_id') ?>

    <?= $form->field($model, 'test_previous_button') ?>

    <?= $form->field($model, 'test_next_button') ?>

    <?= $form->field($model, 'test_laser_pointer') ?>

    <?php // echo $form->field($model, 'test_battery_1') ?>

    <?php // echo $form->field($model, 'test_battery_2') ?>

    <?php // echo $form->field($model, 'battery_type') ?>

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
