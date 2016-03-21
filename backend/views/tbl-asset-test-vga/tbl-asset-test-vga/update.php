<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestVga */

$this->title = 'Update Asset Test Vga : ' . ' #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vgas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "Asset Test Vga #".$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-asset-test-vga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
