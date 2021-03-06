<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestClassroom */

$this->title = 'Update Asset Test Classroom : ' . ' #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => ' Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => ' Classrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Asset Test Classroom #'.$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-asset-test-classroom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
