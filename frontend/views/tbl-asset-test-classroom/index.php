<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestClassroom */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classrooms';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-classroom-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Classroom)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
           // 'inventory_id',
            ['attribute'=>'inventory_id',
            'value'=>'inventorY.classroom_name',
            'label'=>'Tag'],
            //'test_electrical_socket',
            //'test_vga_socket',
            //'test_audio_and_video_ports',
            // 'test_ethernet_port_1',
            // 'test_ethernet_port_2',
            // 'check_retractable_screen',
            // 'check_projector_retraction',
            // 'check_projector',
            // 'check_projector_alignment',
            // 'total_projector_bulb_life',
            // 'total_bulb_life_used',
            // 'total_bulb_life_remaining',
            // 'created_date:date',
            // 'update_date:date',
            // 'service_period',
             //'status',
            ['value'=>'servicestatus.status_name',
             'attribute'=>'status',
             'label'=>'Status'],
             'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
