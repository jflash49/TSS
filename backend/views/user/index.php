<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchUser */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-index">
<div id="sidebar" class="panel panel-default" data-spy="affix" data-offset-top="60" data-offset-bottom="400">
 <?= Html::a('Statistics',["/site/stats"],['class'=>'btn btn-primary btn-block'])?>
 </div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            'firstname',
            'lastname',
            //'auth_key',
            // 'password_hash',
            // 'password_reset_token',
             'created_at:date',
            // 'updated_at:date',
			//'lastvisit:date',
            // 'lastaction',
            // 'lastpasswordchange',
            // 'superuser',
             'status',
            // 'notifyType',
			//email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

