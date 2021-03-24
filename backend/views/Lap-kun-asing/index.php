<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LapKunAsingCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wisatawan Asing';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>    
<div class="lap-kun-asing-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-sm-7"></div>
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="margin">
    <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    <div class="btn-group">
        <button type="button" class="btn btn-info">Bulan</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fjanuari' ?>">Januari</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Ffebruari' ?>">Februari</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fmaret' ?>">Maret</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fapril' ?>">April</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fmei' ?>">Mei</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fjuni' ?>">Juni</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fjuli' ?>">Juli</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fagustus' ?>">Agustus</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fseptember' ?>">September</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Foktober' ?>">Oktober</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fnovember' ?>">November</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-asing%2Fdesember' ?>">Desember</a></li>
        </ul>
    </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_lap_asing',
            'id_user',
            'bulan',
            'negara',
            'pria',
            //'wanita',
            //'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
