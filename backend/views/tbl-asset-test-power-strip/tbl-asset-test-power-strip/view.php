<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestPowerStrip */

$this->title = "Asset Test Power Strip #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Power Strips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-power-strip-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
             ['attribute'=>'inventorY.tag',
            'label'=>'Tag'],
            //'inventory_id',
            ['attribute'=>'checkProngs.status_name',
            'label'=>'Check Prongs'],
            ['attribute'=>'checkPowerIndicator.status_name',
            'label'=>'Check Power Indicator'],
            ['attribute'=>'checkSockets',
            'label'=>'Check Sockets'],
            //'check_prongs',
            //'check_power_indicator',
            //'check_sockets',
            'length',
            'created_date:date',
            'update_date:date',
             [ 'attribute'=>'perioD',
             'label'=>"Service Period"],
            ['attribute'=>'servicestatus.status_name',
             'label'=>'Service Status'],/*
            'service_period',
            'status',*/
            'comment',
        ],
    ]) ?>

</div>
