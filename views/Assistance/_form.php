<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Assistance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assistance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'DiaS')->textInput() ?>

    <?= $form->field($model, 'Dia')->textInput() ?>

    <?= $form->field($model, 'Mes')->textInput() ?>

    <?= $form->field($model, 'Ano')->textInput() ?>

    <?= $form->field($model, 'Tiempo')->textInput() ?>

    <?= $form->field($model, 'Hora')->textInput() ?>

    <?= $form->field($model, 'Minuto')->textInput() ?>

    <?= $form->field($model, 'Segundo')->textInput() ?>

    <?= $form->field($model, 'STotal')->textInput() ?>

    <?= $form->field($model, 'CI')->textInput() ?>

    <?= $form->field($model, 'Nombre')->textInput() ?>

    <?= $form->field($model, 'Dispositivo')->textInput() ?>

    <?= $form->field($model, 'Evento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
