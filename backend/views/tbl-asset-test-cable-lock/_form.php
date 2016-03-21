<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestCableLock */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-cable-lock-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'check_keys')->dropDownList(
        ['8'=>'Missing', '9'=>'Working'],
        ['prompt'=>'Select .. . ']); ?>

    <?= $form->field($model, 'check_for_damage')->dropDownList(
        ['8'=>'Missing', '9'=>'Working','10'=>'Repair'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
