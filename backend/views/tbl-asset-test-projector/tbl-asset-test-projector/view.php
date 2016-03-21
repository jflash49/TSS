<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestProjector */

$this->title = "Asset Test Projector #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Projectors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-projector-view">

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
            ['attribute'=>'checkProjector.status_name',
            'label'=>'Check Projector'],
            //'check_projector',
            'total_projector_bulb_life',
            'total_bulb_life_used',
            'total_bulb_life_remaining',
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
