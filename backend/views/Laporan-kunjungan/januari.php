<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LaporaKunjunganCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-kunjungan-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Laporan Kunjungan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Akomodasi</th>
                  <th>Bulan</th>
                  <th>Wistawan Asing</th>
                  <th>Wisatawan Nusantara</th>
                  <th>Total Wisatawan</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($modelA as $model) { ?>
                <tr>
                  <td><?= $model->bulan?></td>
                
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>


</div>
