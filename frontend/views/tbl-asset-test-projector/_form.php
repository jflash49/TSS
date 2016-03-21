<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestProjector */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-projector-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'check_projector')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'total_projector_bulb_life')->textInput() ?>

    <?= $form->field($model, 'total_bulb_life_used')->textInput() ?>

    <?= $form->field($model, 'total_bulb_life_remaining')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
