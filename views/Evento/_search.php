<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Tiempo') ?>

    <?= $form->field($model, 'Hora') ?>

    <?= $form->field($model, 'Minuto') ?>

    <?= $form->field($model, 'Segundo') ?>

    <?php // echo $form->field($model, 'STotal') ?>

    <?php // echo $form->field($model, 'Evento') ?>

    <?php // echo $form->field($model, 'Dispositivo') ?>

    <?php // echo $form->field($model, 'Fecha_Id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
