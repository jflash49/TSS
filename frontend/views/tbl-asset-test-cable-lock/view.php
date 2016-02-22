<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestCableLock */

$this->title = 'Asset Test Cable Lock #'.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Cable Locks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-cable-lock-view">

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
            ['attribute'=>'keyStatus.status_name',
             'label'=>'Check Keys'],
            //'check_keys',
             ['attribute'=>'damageStatus.status_name',
             'label'=>'Check for Damage'],
            //'check_for_damage',
             //['attribute'=>'keyStatuses.status_name',
             //'label'=>'Check Keys Status'],
           // 'check_keys_status',
            //'check_for_damage_status',
           // ['attribute'=>'damageStatuses.status_name',
            // 'label'=>'Check for Damage Status'],
            'date_created:date',
            'update_date:date',
            //'service_period',
            [ 'attribute'=>'perioD',
             'label'=>"Service Period"],
            ['attribute'=>'serviceStatus.status_name',
             'label'=>'Service Status'],
             //'status',
            'comment',
        ],
    ]) ?>

</div>
