<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestEthernet */

$this->title = "Asset Test Ethernets #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Ethernets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-ethernet-view">

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
            //'inventory_id',
            ['attribute'=>'inventorY.tag',
             'label'=>'Inventory Item'],
            //'test_cable',
             ['attribute'=>'testCable.status_name',
             'label'=>'Test Cable'],
            //'check_connector_tag_side',
            //'check_connector_far_side',
             ['attribute'=>'checkConnectorTagSide.status_name',
             'label'=>'Check Connector Tag Side'],
             ['attribute'=>'checkConnectorFarSide.status_name',
             'label'=>'Check Connector Far Side'],
            'length',
            'created_date:date',
            'update_date:date',
             [ 'attribute'=>'perioD',
             'label'=>"Service Period"],
            ['attribute'=>'serviceStatus.status_name',
             'label'=>'Service Status'],
           /* 'service_period',
            'status',*/
            'comment',
        ],
    ]) ?>

</div>
