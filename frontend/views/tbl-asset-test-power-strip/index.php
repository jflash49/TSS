<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestPowerStrip */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Power Strips';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-power-strip-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Power Strip)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'inventory_id',
            'value'=>'inventorY.tag',
            'label'=>'Tag'],/*
            'id',
            'inventory_id',
            'check_prongs',
            'check_power_indicator',
            'check_sockets',*/
            // 'length',
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
