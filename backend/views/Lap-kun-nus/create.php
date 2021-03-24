<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LapKunNus */

$this->title = 'Tambah Laporan Kunjungan';
$this->params['breadcrumbs'][] = ['label' => 'LapNusantara', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lap-kun-nus-create">
<br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
