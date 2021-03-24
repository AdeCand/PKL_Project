<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BeritaCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berita-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Berita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_berita',
            'judul_berita',
<<<<<<< HEAD
            'deskripsi:ntext',
            'gambar',
            'tanggal',
=======
            'deskripsi_singkat',
            'deskripsi:ntext',
            'gambar',
            //'tanggal',
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
