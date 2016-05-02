<?php
use yii\helpers\Html;
use yii\web\UrlManager;
use common\models\User;





/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestCableLock */
/* @var $dataProvider yii\data\ActiveDataProvider */

/* @var $this yii\web\View */


$this->title = 'Statistics';
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['/user/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
	<div class="jumbotron">
         <h1>Statistics</h1>
</div>
<div class="container">
<table class="table table-striped">
<tr><td>Total Users</td><td><?php echo ($model[0]) ?><td></tr>
<tr><td>Active Users</td> <td><?php echo ($model[1]) ?><td></tr>

<tr><td>New users registered today</td> <td><?php echo ($model[2]) ?><td></tr>

<tr><td>Inactive users</td> <td><?php echo ($model[3]) ?><td></tr>

<tr><td>Banned users</td> <td><?php echo ($model[4]) ?><td></tr>

<tr><td>Admin Users</td> <td><?php echo ($model[5]) ?><td></tr>

<tr><td>Different users logged in today</td><td><?php echo ($model[6]) ?><td></tr>

</tr>

</table>

</div>

</div>
