<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblInventoryConsumables */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consumables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-consumables-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Consumables', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'device_type',
            'consumable:ntext',
            'optimal_storage_level',
            'storage_point',
            'current_stock',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
