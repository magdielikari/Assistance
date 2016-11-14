<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tiempo')->textInput() ?>

    <?= $form->field($model, 'Hora')->textInput() ?>

    <?= $form->field($model, 'Minuto')->textInput() ?>

    <?= $form->field($model, 'Segundo')->textInput() ?>

    <?= $form->field($model, 'STotal')->textInput() ?>

    <?= $form->field($model, 'Evento')->textInput() ?>

    <?= $form->field($model, 'Dispositivo')->textInput() ?>

    <?= $form->field($model, 'Fecha_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
