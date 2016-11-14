<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fecha */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fecha-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'DiaS')->textInput() ?>

    <?= $form->field($model, 'Dia')->textInput() ?>

    <?= $form->field($model, 'Mes')->textInput() ?>

    <?= $form->field($model, 'Ano')->textInput() ?>

    <?= $form->field($model, 'Persona_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
