<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RoleModuleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="role-module-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'role_id') ?>

    <?= $form->field($model, 'module_id') ?>

    <?= $form->field($model, 'view') ?>

    <?= $form->field($model, 'add') ?>

    <?php // echo $form->field($model, 'update') ?>

    <?php // echo $form->field($model, 'delete') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
