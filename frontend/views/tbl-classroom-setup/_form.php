<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TblClassroom;
use common\models\TblCourses;
use common\models\TblClassroomSetupType;
use common\models\TblIsInventory;
use kartik\time\TimePicker;
use wbraganca\dynamicform\DynamicFormWidget;


/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-classroom-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'user_id')->textInput() ?>

    <!?= $form->field($model, 'form_type')->textInput() ?-->

    <?= $form->field($model, 'setup_type')->dropDownList(
            ArrayHelper::map(TblClassroomSetupType::find()->all(), 'id','setup_name'),
            ['prompt'=>'Select Setup Type']
            )?>

    <?= $form->field($model, 'setup_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'closed_by')->textInput() ?>

    <?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>
    <!--?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?-->


    <?= $form->field($model, 'end_date')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>

    <!--?= $form->field($model, 'update_date')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?-->

    <?= $form->field($model, 'assigned_to')->textInput() ?>

    <?= $form->field($model, 'inventory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classroom')->dropDownList(
            ArrayHelper::map(TblClassroom::find()->all(), 'id','classroom_name'),
            ['prompt'=>'Select Classroom']
            )?>

    <?= $form->field($model, 'classroom_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_code')->dropDownList(
            ArrayHelper::map(TblCourses::find()->all(), 'id','course_name','course_code'),
            ['prompt'=>'Select Course']
            )?>

    <?= $form->field($model, 'setup_time')->widget(TimePicker::classname(), []);?>
    <?= $form->field($model, 'pickup_time')->widget(TimePicker::classname(), []);?>

    <?= $form->field($model, 'scheduled_start_time')->widget(TimePicker::classname(), []);
   ?>

    <?= $form->field($model, 'scheduled_end_time')->widget(TimePicker::classname(), []);
   ?>
    <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 4, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'model' => $modelItem[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'tag',
                    ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelItem as $i => $modelItem): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Inventory</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelItem->isNewRecord) {
                                echo Html::activeHiddenInput($modelItem, "[{$i}]form_id");
                            }
                        ?>
                        <?= $form->field($modelItem, "[{$i}]type")->textInput(['maxlength' => true]) ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($modelItem, "[{$i}]tag")->textInput(['maxlength' => true]) ?>
                        
                            </div>
                        </div><!-- .row -->
                    </div>
                </div>
                <?php endforeach; ?>
    <?php DynamicFormWidget::end(); ?>

    <!--?= $form->field($model, 'status')->textInput() ?-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>




</div>
<?
$js ='

$(".dynamicform_wrapper").on("beforeInsert", function(e, item) {
    console.log("beforeInsert");
});

$(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    console.log("afterInsert");
});

$(".dynamicform_wrapper").on("beforeDelete", function(e, item) {
    if (! confirm("Are you sure you want to delete this item?")) {
        return false;
    }
    return true;
});

$(".dynamicform_wrapper").on("afterDelete", function(e) {
    console.log("Deleted item!");
});

$(".dynamicform_wrapper").on("limitReached", function(e, item) {
    alert("Limit reached");
});
';

//JuiAsset::register($this);

$this->registerJs($js);
?>
