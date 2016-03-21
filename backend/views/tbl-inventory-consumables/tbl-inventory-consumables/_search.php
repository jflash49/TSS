<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblInventoryConsumables */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-inventory-consumables-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'device_type') ?>

    <?= $form->field($model, 'consumable') ?>

    <?= $form->field($model, 'optimal_storage_level') ?>

    <?= $form->field($model, 'storage_point') ?>

    <?php // echo $form->field($model, 'current_stock') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
