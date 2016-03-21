<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblClassroom */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Classrooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-classroom-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Classroom', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'classroom_name',
            'serviceable',
            'last_date_serviced',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
