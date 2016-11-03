<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AssistanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Assistances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assistance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Assistance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'CI',
            'Nombre',
            'Fecha',
            'DiaS',
            //'Dia',
            //'Mes',
            // 'Ano',
            'Tiempo',
            // 'Hora',
            // 'Minuto',
            // 'Segundo',
            // 'STotal',
            // 'Dispositivo',
             'Evento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
