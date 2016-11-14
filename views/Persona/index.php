<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\ModelUtility;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Persona', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Id',
            'Nombre',
            'Ci',
            [
                'attribute'=>'Fecha',
                'format'=>'raw',
                'value'=>function($data){
                    return ModelUtility::handler($data, 'fecha', 'Fecha');
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
