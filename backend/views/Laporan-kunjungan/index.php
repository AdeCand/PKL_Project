<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LapKunAsingCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< HEAD
$this->title = 'Lap Kun Asings';
=======
$this->title = 'Laporan Kunjungan';
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lap-kun-asing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lap Kun Asing', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_lap_asing',
            'id_user',
<<<<<<< HEAD
            'bulan',
            'negara',
=======
            'jenis_wisatawan',
            [
                'attribute' => 'negara',
                'value' => 'negara.kawasan',
            ],
            // 'negara',
            'provinsi',
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
            'pria',
            //'wanita',
            //'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
