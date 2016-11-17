<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\ModelUtility;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$gridColumns = [
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
        'class' => 'yii\grid\ActionColumn',
        'visibleButtons' => [ 
            'update' => False, 
            'delete' => False
        ]
    ]
];

$this->title = 'Personas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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