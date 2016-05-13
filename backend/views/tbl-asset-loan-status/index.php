<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetLoanStatus */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asset Loans Status';
$this->params['breadcrumbs'][] = ['label' => 'Settings'];
$this->params['breadcrumbs'][] = ['label' => 'Configurations', 'url' => ['/site/confg']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-loan-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--?= //Html::a('Create Asset Loan (Status)', ['create'], ['class' => 'btn btn-success']) ?-->
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'entry_id',
            //'inventory_id',
            ['attribute'=>'inventory_id',
            'value'=>'inventorY.tag',
            'label'=>'Inventory '],
            //'received_by',
            ['attribute'=>'received_by',
            'value'=>'useR.username',
            'label'=>'Received By'],
            ['attribute'=>'status',
            'value'=>'statuS.status_name',
           'label'=> 'Status'],
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
