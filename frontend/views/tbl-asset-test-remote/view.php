<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestRemote */

$this->title = "Asset Test Remote #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Remotes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-remote-view">

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
            ['attribute'=>'testPowerButton.status_name',
            'label'=>'Test Power Button'],
            ['attribute'=>'enterMenuOptions.status_name',
            'label'=>'Enter menu Options'],
            ['attribute'=>'makeScreenBlankButton.status_name',
            'label'=>'Make Screen Blank Button'],
            ['attribute'=>'testBattery1.status_name',
            'label'=>'Test Battery 1'],
            ['attribute'=>'testBattery2.status_name',
            'label'=>'Test Battery 2'],
            //'test_power_button',
            /*'enter_menu_options',
            'make_screen_blank_button',
            'choose_source_button',
            'test_battery_1',
            'test_battery_2',*/
            'battery_type:ntext',
            ['attribute'=>'upELTMountRemote.status_name',
            'label'=>'Up ELT Mount Remote'],
            ['attribute'=>'downELTMountRemote.status_name',
            'label'=>'Down ELT Mount Remote'],
            ['attribute'=>'stopELTMountRemote.status_name',
            'label'=>'Stop ELT Mount Remote'],
            /*'up_elt_mount_remote',
            'down_elt_mount_remote',
            'stop_elt_mount_remote',*/
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
