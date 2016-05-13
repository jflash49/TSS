<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Configurations';
$this->params['breadcrumbs'][] = ['label' => 'Settings'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-configuraitons">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="site-body">

    <div class = "nav">	
    <table class="table table-hover table-striped">
    <tr><td>
	<?= Html::a('Asset Loan Purpose', ['/tbl-asset-loan-purpose/index']) ?> </td></tr>
    <tr><td><?= Html::a('Asset Loan Status', ['/tbl-asset-loan-status/index']) ?></td></tr>
    <tr><td><?= Html::a('Courses', ['/tbl-courses/index']) ?></td></tr>
    <tr><td><?= Html::a('Classroom Setup Type', ['/tbl-classroom-setup-type/index']) ?></td></tr>
    <tr><td><?= Html::a('External User Information',['/tbl-external-user/index']) ?></td></tr>
   <tr> <td><?= Html::a('Roles',['/role/index']) ?></td></tr>
    <tr><td><?= Html::a('Buildings',['/tbl-buildings/index']) ?></td></tr>
    <tr> <td><?= Html::a('Statuses',['/tbl-statuses/index'])?></td></tr>
    <!--<tr> <td>< Html::a('Statuses',['/tbl-statuses/index'],['class'=>'btn btn-primary'])</td></tr-->
     </table>
    </div>


    </div>
    

</div>