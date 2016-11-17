<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fecha */

$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Fechas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fecha-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'Fecha',
            'DiaS',
            'Dia',
            'Mes',
            'Ano',
            'Persona_Id',
        ],
    ]) ?>

</div>
