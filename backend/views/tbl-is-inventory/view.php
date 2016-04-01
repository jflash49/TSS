<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblIsInventory */

$this->title = "I.S Inventory #".$model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'I.S Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-is-inventory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->form_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->form_id], [
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
            ['attribute'=>'useR.username',
           'label'=> 'Username'],
            'tag',
            ['attribute'=>'typE.name',
           'label'=> 'Item Type'],
            'start_date:date',
            'comments',
        ],
    ]) ?>

</div>
