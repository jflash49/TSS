<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestSpeaker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-speaker-form">

    <?php $form = ActiveForm::begin(); ?>

   
    <?= $form->field($model, 'check_volume_control')->textInput() ?>

    <?= $form->field($model, 'check_audio_output')->textInput() ?>


    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
