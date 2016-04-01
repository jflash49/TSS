<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestLaptop */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laptops';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-laptop-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Laptop)', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'inventory_id',
            //'update_standard_software',
            //'apply_os_patches',
           // 'update_antivirus',
            // 'update_anti_spyware',
            // 'run_anti_virus_scan',
            // 'run_anti_spyware_scan',
            // 'run_chkdsk',
            // 'run_disk_cleanup',
            // 'run_disk_defragmenter',
            // 'check_all_buttons',
            // 'check_touchpad',
            // 'check_volume_buttons',
            // 'check_internal_mic',
            // 'check_internal_speakers',
            // 'check_all_ports',
            // 'test_adapter',
            // 'charger_laptop',
            // 'turn_off_sleep',
            // 'clean_laptop_monthly',
            // 'date_created:date',
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
