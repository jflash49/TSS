<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestLaptopBag */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laptop Bags';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-laptop-bag-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Laptop Bag)', ['create'], ['class' => 'btn btn-success']) ?>
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
           /* 'inventory_id',
            'empty_bag',
            'test_strap',
            'clean_bag_monthly',*/
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
