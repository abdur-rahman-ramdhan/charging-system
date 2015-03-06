<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RoleModule */

$this->title = 'Create Role Module';
$this->params['breadcrumbs'][] = ['label' => 'Role Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-module-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
