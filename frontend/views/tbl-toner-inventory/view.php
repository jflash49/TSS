<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblTonerInventory */

$this->title = $model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Toner Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-toner-inventory-view">

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
            'form_id',
            'user_id',
            'form_type',
            'color:ntext',
            'tag',
            'closed_by',
            'start_date',
            'end_date',
            'assigned_to',
            'inventory',
            'comments',
        ],
    ]) ?>

</div>
