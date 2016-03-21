<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblClassroom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-classroom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'classroom_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serviceable')->textInput() ?>

    <?= $form->field($model, 'last_date_serviced')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
