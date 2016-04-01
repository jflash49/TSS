<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestRemote */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Remotes';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-remote-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Remote)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'inventory_id',
            'value'=>'inventorY.tag',
            'label'=>'Tag'],/*
            'id',
            'inventory_id',
            'test_power_button',
            'enter_menu_options',
            'make_screen_blank_button',*/
            // 'choose_source_button',
            // 'test_battery_1',
            // 'test_battery_2',
            // 'battery_type:ntext',
            // 'up_elt_mount_remote',
            // 'down_elt_mount_remote',
            // 'stop_elt_mount_remote',
            // 'created_date:date',
            // 'update_date:date',
            // 'service_period',
            // 'status',
            // 'comment',
             ['value'=>'statusName.status_name',
             'attribute'=>'status',
             'label'=>'Status'],
            ['attribute'=>'status',
            'value'=>'servicestatus.status_name',
            'label'=>'Service Status'],
             'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
