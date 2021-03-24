<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\LapKunNus */

$this->title = $model->id_lap_nus;
$this->params['breadcrumbs'][] = ['label' => 'Lap Kun Nuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="lap-kun-nus-view">
<br>
<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_lap_nus], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_lap_nus], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_lap_nus',
            'id_user',
            'bulan',
            'provinsi',
            'pria',
            'wanita',
            'jumlah',
        ],
    ]) ?>

</div>
