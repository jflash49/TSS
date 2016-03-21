<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblIsInventory */

$this->title = 'Create I.S Inventory';
$this->params['breadcrumbs'][] = ['label' => 'I.S Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-is-inventory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
