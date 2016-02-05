<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblClassroomSetup */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title ='Classroom Setups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-classroom-setup-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Classroom Setup', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'form_id',
            //'user_id',
            //'form_type',
            //'setup_type',
            //'setup_other',
            // 'closed_by',
             //'start_date:date',
             //'end_date:date',
            // 'update_date:date',
            // 'assigned_to',
            // 'comments',
            ['attribute'=>'classroom',
            'label'=>'Location',
            'value'=>'classroomName'],
            'inventory',
            //'classroom',
            // 'classroom_other',
            // 'course_code',
            // 'setup_time',
            // 'pickup_time',
             //'scheduled_start_time',
             'scheduled_end_time:datetime',
             ['attribute'=>'status',
             'label'=>'Status',
             'value'=>'statuS.status_name'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
