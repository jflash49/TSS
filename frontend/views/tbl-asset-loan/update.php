<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetLoan */

$this->title = 'Update Asset Loan : ' . ' #' . $model->entry_id;
$this->params['breadcrumbs'][] = ['label' => ' Asset Loans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Asset Loan #'.$model->entry_id, 'url' => ['view', 'id' => $model->entry_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-asset-loan-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <p> Fields with * are required </p>
    <?= $this->render('_form', [
        'model' => $model,
        'external'=>$external,
        'modelItem'=>$modelItem,
        ]) ?>

</div>
