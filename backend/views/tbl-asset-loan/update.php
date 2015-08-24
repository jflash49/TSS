<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetLoan */

$this->title = 'Update Tbl Asset Loan: ' . ' ' . $model->entry_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Asset Loans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->entry_id, 'url' => ['view', 'id' => $model->entry_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-asset-loan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
