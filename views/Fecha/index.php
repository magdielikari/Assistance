<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\ModelUtility;
use kartik\export\ExportMenu;
$gridColumns = [
    ['class' => 'yii\grid\SerialColumn'],
        //'Id',
        [
            'label' => 'Nombre',
            'attribute'=>'Persona_Id',
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
            'attribute'=>'Dia Laborado',
            'format'=>'raw',
            'value'=>function($data){
                return ModelUtility::handlers($data, 'evento', 'STotal', 'Tiempo', 'Evento');
            },
            'options'=>['class'=>'text-center'],
        ],
        [
            'attribute'=>'Evento',
            'format'=>'raw',
            'value'=>function($data){
                return ModelUtility::handlerss($data, 'evento', 'STotal', 'Tiempo','Evento');
            },
            'options'=>['class'=>'text-center'],
        ],
        //'Dia',
        //'Mes',
        //'Ano',
    ['class' => 'yii\grid\ActionColumn'],
];

$this->title = 'Fechas';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="fecha-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fecha', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?=
// Renders a export dropdown menu
ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns
]);
?>

<?=  \kartik\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns
]);
?>
<?php Pjax::end(); ?></div>
