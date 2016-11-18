<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="site-index">

    <div class="jumbotron">
        <?=
            Html::img('@web/img/logo.jpg', ['alt'=>Yii::$app->name]);
        ?>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>Persona</h2>

                <p>Muestra días laborados por persona. Comprende la información de trabajadores que al menos poseen 1 entrada o 1 salida. Acá se podrá filtrar por Nombre o Cédula de identidad.</p>

                <p><a class="btn btn-default" href="<?= Url::to(['persona/index']);?>">Persona &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Fecha</h2>

                <p>Muestra las horas de entradas y salidas por fechas de cada trabajador, puede filtrarse por nombre, fecha y nombre del día. </p>

                <p><a class="btn btn-default" href="<?= Url::to(['fecha/index']);?>">Fecha &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Evento</h2>

                <p>Muestra todos los eventos (Entradas, Salidas). </p>

                <p><a class="btn btn-default" href="<?= Url::to(['evento/index']);?>">Evento &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>Actulización</h2>

                <p>Formulario (en construcción) para la actualización de los datos</p>

                <p><a class="btn btn-default" href="<?= Url::to(['site/about']);?>">Actulización &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
