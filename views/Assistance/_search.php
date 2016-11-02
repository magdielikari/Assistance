<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AssistanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assistance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'DiaS') ?>

    <?= $form->field($model, 'Dia') ?>

    <?= $form->field($model, 'Mes') ?>

    <?php // echo $form->field($model, 'Ano') ?>

    <?php // echo $form->field($model, 'Tiempo') ?>

    <?php // echo $form->field($model, 'Hora') ?>

    <?php // echo $form->field($model, 'Minuto') ?>

    <?php // echo $form->field($model, 'Segundo') ?>

    <?php // echo $form->field($model, 'STotal') ?>

    <?php // echo $form->field($model, 'CI') ?>

    <?php // echo $form->field($model, 'Nombre') ?>

    <?php // echo $form->field($model, 'Dispositivo') ?>

    <?php // echo $form->field($model, 'Evento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
