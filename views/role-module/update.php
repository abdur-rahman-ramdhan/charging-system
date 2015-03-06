<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RoleModule */

$this->title = 'Update Role Module: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Role Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="role-module-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
