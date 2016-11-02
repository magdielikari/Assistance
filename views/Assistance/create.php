<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Assistance */

$this->title = 'Create Assistance';
$this->params['breadcrumbs'][] = ['label' => 'Assistances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assistance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
