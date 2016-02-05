<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetup */

$this->title = 'Create Classroom Setup';
$this->params['breadcrumbs'][] = ['label' => 'Classroom Setups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-classroom-setup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelItem'=>$modelItem,
    ]) ?>

</div>
