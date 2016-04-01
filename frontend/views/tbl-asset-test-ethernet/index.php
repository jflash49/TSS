<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestEthernet */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ethernets';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-ethernet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Ethernet)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute'=>'inventory_id',
            'value'=>'inventorY.tag',
            'label'=>'Tag'],
            //'test_cable',
           // 'check_connector_tag_side',
           // 'check_connector_far_side',
            // 'length',
            // 'created_date:date',
            // 'update_date:date',
            // 'service_period',
             ['value'=>'statusName.status_name',
             'attribute'=>'status',
             'label'=>'Status'],
             ['attribute'=>'status',
            'value'=>'serviceStatus.status_name',
            'label'=>'Service Status'],
             'comment',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
