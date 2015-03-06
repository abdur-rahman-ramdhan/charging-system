<?php

use app\models\Modules;
use app\models\Roles;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\RoleModule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="role-module-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'role_id')->dropDownList(
        ArrayHelper::map(Roles::find()->all(),'id','role_name'),
        ['prompt'=>'Select Role']
    ) ?>

    <?= $form->field($model, 'module_id')->dropDownList(
        ArrayHelper::map(Modules::find()->all(),'id','module_name'),
        ['prompt'=>'Select Module']
    ) ?>

    <?= $form->field($model, 'view')->dropDownList([ 'n' => 'N', 'y' => 'Y', ], ['prompt' => 'Select y/n']) ?>

    <?= $form->field($model, 'add')->dropDownList([ 'n' => 'N', 'y' => 'Y', ], ['prompt' => 'Select y/n']) ?>

    <?= $form->field($model, 'update')->dropDownList([ 'n' => 'N', 'y' => 'Y', ], ['prompt' => 'Select y/n']) ?>

    <?= $form->field($model, 'delete')->dropDownList([ 'n' => 'N', 'y' => 'Y', ], ['prompt' => 'Select y/n']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
