<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LapKunAsing */

$this->title = 'Update Lap Kun Asing: ' . $model->id_lap_asing;
$this->params['breadcrumbs'][] = ['label' => 'Lap Kun Asings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lap_asing, 'url' => ['view', 'id' => $model->id_lap_asing]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lap-kun-asing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
