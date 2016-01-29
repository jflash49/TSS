<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetupType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-classroom-setup-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'setup_name')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
