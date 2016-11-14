<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\ModelUtility;
/* @var $this yii\web\View */
/* @var $searchModel app\models\FechaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fechas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fecha-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fecha', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Id',
            [
                'label' => 'Nombre',
                'value' => 'persona.Nombre',
            ],
            'Fecha',
            'DiaS',
            [
                'attribute'=>'Hora',
                'format'=>'raw',
                'value'=>function($data){
                    return ModelUtility::handler($data, 'evento', 'Tiempo');
                },
                'options'=>['class'=>'text-center'],
            ],
            [
                'attribute'=>'Evento',
                'format'=>'raw',
                'value'=>function($data){
                    return ModelUtility::handler($data, 'evento', 'Evento');
                },
                'options'=>['class'=>'text-center'],
            ],
            //'Dia',
            //'Mes',
            //'Ano',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
