<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LaporaKunjunganCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bulan Februari';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="laporan-kunjungan-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="margin">
    <a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus' ?>">
      <button type="button" class="btn btn-info">Kembali</button>
    </a>
    <div class="btn-group">
        <button type="button" class="btn btn-info">Bulan</button>
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fjanuari' ?>">Januari</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Ffebruari' ?>">Februari</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fmaret' ?>">Maret</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fapril' ?>">April</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fmei' ?>">Mei</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fjuni' ?>">Juni</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fjuli' ?>">Juli</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fagustus' ?>">Agustus</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fseptember' ?>">September</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Foktober' ?>">Oktober</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fnovember' ?>">November</a></li>
            <li><a href="<?= Yii::$app->request->baseUrl. '/index.php?r=lap-kun-nus%2Fdesember' ?>">Desember</a></li>
        </ul>
    </div>
    </div>
   <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Bulan</th>
                  <th>Provinsi</th>
                  <th>Pria</th>
                  <th>Wanita</th>
                  <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($model as $model) { ?>
                <tr>
                  <td><?= $model->id_user?></td>
                  <td><?= $model->bulan?></td>
                  <td><?= $model->provinsi?></td>
                  <td><?= $model->pria?></td>
                  <td><?= $model->wanita?></td>
                  <td><?= $model->jumlah?></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
    </div>