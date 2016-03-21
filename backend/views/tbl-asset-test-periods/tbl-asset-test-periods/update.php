<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestPeriods */

$this->title = 'Update Asset Test Period ' ;
$this->params['breadcrumbs'][] = ['label' => 'Test Periods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->getPerioD(), 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-asset-test-periods-update">

    <h1><?= Html::encode($this->title) ?></h1>
     <h2><?php echo $model->getPerioD() ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
