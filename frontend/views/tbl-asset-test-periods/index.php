<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\TblAssetTestPeriods;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestPeriods */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asset Test Periods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-periods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Periods)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
           // 'periods',

             [ 'attribute'=>'perioD',
             'label'=>"Test Periods"],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
