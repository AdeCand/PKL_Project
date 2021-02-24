<?php

use rce\material\widgets\Card;
use Yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'About';
?>
<div class="site-about">
    
    <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
            
              <h3 class="card-title"><?= $berita['judul_berita'] ?></h3>
              <p class="card-category">
                Dapatkan berita terbaru seputar wisata di Kota Batu
              </p>
            </div>
            
            <div class="card-body">
            
              
              <div class="row">
              <?php foreach($berita as $berita) { ?>
                <div class="col-lg-4 col-md-10 col-sm-6">
                  <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b><?= $berita->judul_berita ?></b></h5>
                      <br>
                      <p class="card-text" align="justify"><?= $berita->deskripsi_singkat ?></p>
                      <a href="<?= Yii::$app->request->baseUrl. '/index.php?r=site%2Fabout&id='. $berita->id_berita ?>" class="btn btn-info">Baca Selengkapnya</a>
                    </div>
                  </div>
                </div>
              <?php } ?>                                    
              </div>
            </div>
            
          </div>
        </div>
      </div>
    <div class="body-content">
            
                <?php Card::begin([
                    'header'=>'header-icon',
                    'type'=>'card-stats',
                    'icon'=>'<i class="material-icons">content_copy</i>',
                    'color'=>'warning',
                    'title'=>'49/50<small>GB</small>',
                    'subtitle'=>'Used Space',
                    'footer'=>'<div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#">Get More Space...</a>
                          </div>',
                ]); Card::end(); ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'header'=>'header-icon',
                    'type'=>'card-stats',
                    'icon'=>'<i class="material-icons">store</i>',
                    'color'=>'success',
                    'title'=>'$34,245',
                    'subtitle'=>'Revenue',
                    'footer'=>'<div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                          </div>',
                ]); Card::end(); ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'header'=>'header-icon',
                    'type'=>'card-stats',
                    'icon'=>'<i class="material-icons">info_outline</i>',
                    'color'=>'danger',
                    'title'=>'75',
                    'subtitle'=>'Fixed Issues',
                    'footer'=>'<div class="stats">
                            <i class="material-icons">local_offer</i> Tracked from Github
                          </div>',
                ]); Card::end(); ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'type'=>'card-stats',
                    'header'=>'header-icon',
                    'icon'=>'<i class="fa fa-twitter"></i>',
                    'color'=>'info',
                    'title'=>'+245',
                    'subtitle'=>'Followers',
                    'footer'=>'<div class="stats">
                            <i class="material-icons">update</i> Just Updated
                          </div>',
                ]); Card::end(); ?>
            </div>
        </div>
        
    </div>

</div>
