<?php

use app\models\Users;
use app\models\Roles;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\UserRole */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-role-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->dropDownList(
    	ArrayHelper::map(Users::find()->all(),'id','username'),
    	['prompt'=>'Select User']
    ) ?>

    <?= $form->field($model, 'role_id')->dropDownList(
    	ArrayHelper::map(Roles::find()->all(),'id','role_name'),
    	['prompt'=>'Select Role']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
