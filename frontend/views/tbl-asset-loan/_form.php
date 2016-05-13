<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TblAssetLoanPurpose;
use common\models\TblIsInventory;
use common\models\TblInventoryType;
use kartik\time\TimePicker;
use wbraganca\dynamicform\DynamicFormWidget;
use frontend\assets\AppAsset;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetLoan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-loan-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($model, 'external_user')->textInput(['style'=>'width:30%;']) ?>

    <?= $form->field($external, 'id_number')->textInput(['style'=>'width:30%;']) ?>

    <?= $form->field($external, 'first_name')->textarea(['rows' => 1, 'style'=>'width:30%;']) ?>

    <?= $form->field($external, 'last_name')->textarea(['rows' => 1, 'style'=>'width:30%;']) ?>

    <?= $form->field($external, 'phone_number')->textInput() ?>

    <?= $form->field($external, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'assigned_to')->textInput() ?>

    <?= $form->field($model, 'inventory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'purpose')->dropDownList(
            ArrayHelper::map(TblAssetLoanPurpose::find()->all(), 'id','purpose'),
            ['prompt'=>'Select purpose']
            )?>

    <?= $form->field($model, 'purpose_other')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expected_return')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?= $form->field($model, 'loan_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>
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
                            ['prompt'=>'Select Inventory Item',
                            'onchange'=> '$.post("index.php?r=tbl-asset-loan/tag&id='.'"+$(this).val(), function (data){
                                $( "select#'.Html::getInputId($modelItem,"[{$i}]tag").'").html(data);
                            });'
                            ])?>
                        </div>
                           <div class="col-sm-6">
                                  <?= $form->field($modelItem, "[{$i}]tag")->dropDownList(
                            ArrayHelper::map(TblIsInventory::find()->all(),'form_id','tag'),
                            [
                                    'prompt'=> 'Select Item',
                                    'onchange'=> 'console.log("'.Html::getInputId($modelItem,"[{$i}]tag").'");'
                                ])
                                 ?>
                        </div>
                            </div>
                        </div><!--  /*->widget(DepDrop::classname(),[
                                    'options'=>['id'=>'tag'],
                                    'pluginOptions'=>[
                                        'depends'=>[Html::getInputId($modelItem,"[{$i}]type")],
                                        'placeholder'=>'Select  ...',
                                        'url'=>Url::to(['/tbl-asset-loan/tag'])
                                        ]
                                    ]);*/
                            //(TblIsInventory::find()->all(), 'tag','tag'),
                           // ['prompt'=>'Select Inventory Item']
                            //).row -->
                    </div>
                </div>
                <?php endforeach; ?>
    <?php DynamicFormWidget::end(); ?>
    </div>
    </div>

    <!--?= $form->field($model, 'status')->dropDownList(['3' => 'On Loan', '4' => 'Over Due', '5' => 'Missing'])?-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
