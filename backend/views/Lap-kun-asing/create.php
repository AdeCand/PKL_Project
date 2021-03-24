<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LapKunAsing */

$this->title = 'Create Lap Kun Asing';
$this->params['breadcrumbs'][] = ['label' => 'Lap Kun Asings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lap-kun-asing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
