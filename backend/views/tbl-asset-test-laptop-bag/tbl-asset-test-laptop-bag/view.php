<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestLaptopBag */

$this->title = "Asset Test Laptop Bags #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Laptop Bags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-laptop-bag-view">

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
            ['attribute'=>'emptyBag.status_name',
            'label'=>'Empty Bag'],
            //'empty_bag',
            ['attribute'=>'testStrap.status_name',
            'label'=>'Test Strap'],
            //'test_strap',
            ['attribute'=>'cleanBagMonthly.status_name',
            'label'=>'Clean Bag Monthly'],
            //'clean_bag_monthly',
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
