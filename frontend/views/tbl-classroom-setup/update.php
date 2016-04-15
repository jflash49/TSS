<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetup */

$this->title = 'Update Classroom Setup : #' . ' ' . $model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'Classroom Setups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Classroom Setup #'.$model->form_id, 'url' => ['view', 'id' => $model->form_id]];
$this->params['breadcrumbs'][] = 'Update Classroom Setup #'.$model->form_id;
?>
<div class="tbl-classroom-setup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelItem'=>$modelItem,
    ]) ?>

</div>
