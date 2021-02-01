<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LaporanKunjunganCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-kunjungan-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="content">        
        <div class="container-fluid">
          <div class="row">          
            <div class="col-md-12">
            <p>
                <?= Html::a('Buat Laporan Kunjungan', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Laporan Kunjungan </h4>
                  <p class="card-category"><?= Yii::$app->user->identity->nama_dtw; ?> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Jenis Wisatawan
                        </th>
                        <th>
                          Negara
                        </th>
                        <th>
                          Provinsi
                        </th>
                        <th>
                          Pria
                        </th>
                        <th>
                          Wanita
                        </th>
                        <th>
                          Jumlah
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                      
                      <?php 
                        $query = "SELECT * FROM laporan_kunjungan INNER JOIN negara, provinsi 
                        ON laporan_kunjungan.id_laporan = negara.negara, provinsi.provinsi";    
                        // $sql_rm = mysqli_query($con, $query) or die (mysqli_error($con));
                        
                      foreach($laporan_kunjungan as $laporan) 
                      { ?>                                                        
                        <tr>                                                        
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $laporan->jenis_wisatawan ?>
                                </td>
                                <td>
                                    <?= $laporan['negara']?>
                                </td>
                                <td>
                                    <?= $laporan['provinsi'] ?>
                                </td>
                                <td>
                                    <?= $laporan->pria ?>
                                </td> 
                                <td>
                                    <?= $laporan->wanita ?>
                                </td>     
                                <td class="text-primary">
                                    <?= $laporan->jumlah ?>
                                </td>                        
                        </tr>
                        <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>


</div>
