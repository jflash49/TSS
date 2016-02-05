<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetup */

$this->title = 'Classroom Setup #'.$model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'Settings'];
$this->params['breadcrumbs'][] = ['label' => 'Configurations', 'url' => ['/site/confg']];
$this->params['breadcrumbs'][] = ['label' => 'Classroom Setups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-classroom-setup-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->form_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->form_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'form_id',
            'user_id',
            'form_type',
            'setup_type',
            'setup_other',
            'closed_by',
            'start_date',
            'end_date',
            'update_date',
            'assigned_to',
            'inventory',
            'comments',
            'classroom',
            'classroom_other',
            'course_code',
            'setup_time',
            'pickup_time',
            'scheduled_start_time',
            'scheduled_end_time',
            ['attribute'=>'statuS.status_name',
           'label'=> 'Status'],
        ],
    ]) ?>

</div>
