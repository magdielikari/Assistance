<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EventoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Eventos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Evento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Id',
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
            //'Hora',
            //'Minuto',
            //'Segundo',
            //'STotal',
            'Evento',
            //'Dispositivo',

            [
                'class' => 'yii\grid\ActionColumn',
                'visibleButtons' => [False, False, True]
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
