<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestLaptopBag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-laptop-bag-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'empty_bag')->dropDownList(
        [ '17'=>'Checked', '18'=>'Not Checked'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'test_strap')->dropDownList(
        [ '12'=>'Not Tested', '9'=>'Working','10'=>'Repair','11'=>'Replace'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'clean_bag_monthly')->dropDownList(
        [ '17'=>'Checked', '18'=>'Not Checked'],
        ['prompt'=>'Select .. .']); ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
