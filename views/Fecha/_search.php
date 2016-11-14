<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FechaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fecha-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Id') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'DiaS') ?>

    <?= $form->field($model, 'Dia') ?>

    <?= $form->field($model, 'Mes') ?>

    <?php // echo $form->field($model, 'Ano') ?>

    <?php // echo $form->field($model, 'Persona_Id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
