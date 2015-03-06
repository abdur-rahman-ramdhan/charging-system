<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Modules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'module_kode')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'module_name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'active')->dropDownList([ 'inactive' => 'Inactive', 'active' => 'Active', ], ['prompt' => 'Status Active']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
