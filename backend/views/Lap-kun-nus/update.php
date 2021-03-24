<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LapKunNus */

$this->title = 'Update Lap Kun Nus: ' . $model->id_lap_nus;
$this->params['breadcrumbs'][] = ['label' => 'Lap Kun Nuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lap_nus, 'url' => ['view', 'id' => $model->id_lap_nus]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lap-kun-nus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
