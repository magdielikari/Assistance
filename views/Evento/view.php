<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\ModelUtility;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */

$this->title = $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Eventos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Nombre',
                'attribute' => 'Persona_Id',
                'value' => 'persona.Nombre',
            ],
            [
                'label' => 'Fecha',
                'attribute' => 'Fecha_Id',
                'value' => 'fecha.Fecha',
            ],
            'Tiempo',
            'Hora',
            'Minuto',
            'Segundo',
            'STotal',
            'Evento',
            'Dispositivo',
        ],
    ]) ?>

</div>
