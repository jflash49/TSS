<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestPowerStrip */

$this->title = 'Create Asset Test Power Strip';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Power Strips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-power-strip-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
