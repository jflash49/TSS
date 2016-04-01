<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblIsInventory */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' I.S Inventories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-is-inventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create (I.S Inventory)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'form_id',
            //'user_id',
            //'type',
            ['attribute'=>'type',
            'value'=>'typE.name',
           'label'=> 'Type'],
            'tag',
            //'closed_by',
            // 'start_date:date',
            // 'end_date:date',
            // 'assigned_to',
            // 'last_date_serviced:date',
            // 'status,'
             ['attribute'=>'status',
            'value'=>'statuS.status_name',
           'label'=> 'Status'],
            // 'inventory',
            // 'purpose',
            // 'comments',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
