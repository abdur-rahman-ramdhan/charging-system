<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RoleModuleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Role Modules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-module-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Role Module', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'role.role_name',
            'module.module_name',
            'view',
            'add',
            'update',
            'delete',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
