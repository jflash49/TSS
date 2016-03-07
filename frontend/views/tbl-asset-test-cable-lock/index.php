<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestCableLock */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cable Locks';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-cable-lock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Cable Lock)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'inventory_id',
            ['attribute'=>'inventory_id',
            'attribute'=>'inventory_id',
            'value'=>'inventorY.tag',
             'label'=>'Tag'],
            //'check_keys',
            //'check_for_damage',
            //'check_keys_status',
            // 'check_for_damage_status',
            // 'date_created:date',
            // 'update_date:date',
            // 'service_period',
             //['value'=>'statusName.status_name',
             //'attribute'=>'status'],
             ['value'=>'serviceStatus.status_name',
             'attribute'=>'status',
             'label'=>'Service Status'],
             'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
