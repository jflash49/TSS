<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestLaptop */

$this->title = "Asset Test Laptop #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Laptops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-laptop-view">

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
            'label'=>'Tag'],//'inventory_id',
            
            ['attribute'=>'updateStandardSoftware.status_name',
            'label'=>'Update Standard Software'],
            ['attribute'=>'applyOsPatches.status_name',
            'label'=>'Apply Os Patches'],
            ['attribute'=>'updateAntiVirus.status_name',
            'label'=>'Update AntiVirus'],
            ['attribute'=>'updateAntiSpyware.status_name',
            'label'=>'Update AntiSpywaree'],
            ['attribute'=>'runCheckDisk.status_name',
            'label'=>'Run ChkDsk'],
            ['attribute'=>'runDiskCleanup.status_name',
            'label'=>'Run Disk Cleanup'],
            //'update_standard_software',
            /*'apply_os_patches',
            'update_antivirus',
            'update_anti_spyware',
            'run_anti_virus_scan',
            'run_anti_spyware_scan',
            'run_chkdsk',
            'run_disk_cleanup',*/
            ['attribute'=>'runDiskDefragmenter.status_name',
            'label'=>'Run Disk Defragmenter'],
            ['attribute'=>'checkAllButtons.status_name',
            'label'=>'Check All Buttons'],
            ['attribute'=>'checkTouchPad.status_name',
            'label'=>'Check Touch Pad'],
            ['attribute'=>'checkVolumeButtons.status_name',
            'label'=>'Check Volume Buttons'],
            ['attribute'=>'checkInternalMic.status_name',
            'label'=>'Check Internal Mic'],
            ['attribute'=>'checkInternalSpeakers.status_name',
            'label'=>'Check Internal Speakers'],
            /*'run_disk_defragmenter',
            'check_all_buttons',
            'check_touchpad',
            'check_volume_buttons',
            'check_internal_mic',
            'check_internal_speakers',*/
            ['attribute'=>'checkAllPorts.status_name',
            'label'=>'Check All Ports'],
            ['attribute'=>'testAdapter.status_name',
            'label'=>'Test Adapter'],
            ['attribute'=>'chargerLaptop.status_name',
            'label'=>'Charger Laptop'],
            /*'check_all_ports',
            'test_adapter',
            'charger_laptop',*/
            ['attribute'=>'turnOffSleep.status_name',
            'label'=>'Turn Off Sleep'],
            ['attribute'=>'cleanLaptopMonthly.status_name',
            'label'=>'Clean Laptop Monthly'],
            //'turn_off_sleep',
           // 'clean_laptop_monthly',
            'date_created:date',
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
