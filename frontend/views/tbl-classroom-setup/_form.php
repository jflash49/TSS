<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TblClassroom;
use common\models\TblCourses;
use common\models\TblClassroomSetupType;
use common\models\TblIsInventory;
use common\models\TblInventoryType;
use kartik\time\TimePicker;
use wbraganca\dynamicform\DynamicFormWidget;
use kartik\depdrop\DepDrop;
use frontend\assets\AppAsset;
use yii\helpers\Url;
AppAsset::register($this);

// $this->registerJsFile('@web/js/dynamic_form.js');
/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetup */
/* @var $form yii\widgets\ActiveForm */



?>

<div class="tbl-classroom-setup-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']);  ?>

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
    <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i> Inventory </h4></div>
        <div class="panel-body">
    <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 8, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelItem[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                	'type',
                    'tag',
                    ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelItem as $i => $modelItem): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
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
                        <div class="row">
                         <div class="col-sm-6">
                        <?= $form->field($modelItem, "[{$i}]type")->dropDownList(
                            ArrayHelper::map(TblInventoryType::find()->all(), 'id','name'),
                            ['prompt'=>'Select Inventory Item']
                            )?>
                        </div>
                           <div class="col-sm-6">
                                <?= $form->field($modelItem, "[{$i}]tag")
                                ->widget(DepDrop::classname(),[
                                    'options'=>['id'=>'status'],
                                    'pluginOptions'=>[
                                        'depends'=>[Html::getInputId($modelItem,"[{$i}]type")],
                                        'placeholder'=>'Select  ...',
                                        'url'=>Url::to(['tbl-classroom-setup/tag'])
                                        ]
                                    ]);/*->dropDownList(
                            ArrayHelper::map(TblIsInventory::find()
                                ->where(['type' => "[{$i}]type"+1])
                                ->all(),'tag','tag'),
                            //(TblIsInventory::find()->all(), 'tag','tag'),
                            ['prompt'=>'Select Inventory Item']
                            )*/
                            ?>
                        </div>
                            </div>
                        </div><!-- .row -->
                    </div>
                </div>
                <?php endforeach; ?>
    <?php DynamicFormWidget::end(); ?>
    </div>
    </div>
    <?= $form->field($model, 'status')->widget(DepDrop::classname(),[
                                	'options'=>['id'=>'status'],
                                	'pluginOptions'=>[
                                		'depends'=>[("[{$i}]tag")],
                                		'placeholder'=>'Select  ...',
                                		'url'=>Url::to(['/tbl-classroom-setup/tag'])
                                        ]
                                	]);
                                	?>
                                 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
   </div>
 </html>





