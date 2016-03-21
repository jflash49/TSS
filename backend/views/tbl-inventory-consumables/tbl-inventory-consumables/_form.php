<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryConsumables */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-inventory-consumables-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'device_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'consumable')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'optimal_storage_level')->textInput() ?>

    <?= $form->field($model, 'storage_point')->textInput() ?>

    <?= $form->field($model, 'current_stock')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
