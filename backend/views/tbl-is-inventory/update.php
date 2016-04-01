<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblIsInventory */

$this->title = 'Update I.S Inventory : ' . ' #' . $model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'I.S Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "I.S Inventory #".$model->form_id, 'url' => ['view', 'id' => $model->form_id]];
$this->params['breadcrumbs'][] = 'Update '."I.S Inventory #".$model->form_id;
?>
<div class="tbl-is-inventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
