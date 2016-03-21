<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryConsumables */

$this->title = 'Update Consumable: #' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Consumables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "Consumable: #".$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-inventory-consumables-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
