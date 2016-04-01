<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestKeyboard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-keyboard-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'type')->dropDownList(
        [ '0'=>'USB', '1'=>'PS2'],
        ['prompt'=>'Select .. .']); ?>
    <?= $form->field($model, 'check_keys')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>