<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\frontend\models\LaporanKunjungan;
use yii\frontend\models\Provinsi;



/* @var $this yii\web\View */
/* @var $model frontend\models\LaporanKunjungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="laporan-kunjungan-form">

    <?php
    /*
        $negara = Negara::find()->all(); 
        $listData = ArrayHelper::map($negara,'negara', 'kawasan'); */ ?>
    
    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'id_user')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false) ?> 
<<<<<<< HEAD
=======
    
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
    <?= $form->field($model, 'jenis_wisatawan')->dropDownList(['Wisatawan Asing' => 'Wisatawan Asing', 
    'Wisatawan Nusantara' => 'Wisatawan Lokal', ], ['prompt' => 'Pilih Jenis Wisatawan']) ?>

    <div class="row">
    <div class="col-md-6">
        <div class="form-group"> 
<<<<<<< HEAD
            <?= $form->field($model, 'negara')->dropDownList( [1 => 'Malaysia', 2 => 'Inggris'], ['prompt' => 'Select']) ?>
=======
            <?= $form->field($model, 'negara')->dropDownList( [1 => 'Malaysia', 2 => 'Inggris', 3 => 'Korea Selatan'], ['prompt' => 'Select']) ?>            
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group"> 
<<<<<<< HEAD
            <?= $form->field($model, 'provinsi')->dropDownList( [1 => 'Jawa Timur', 2 => 'Jawa Barat'],['prompt' => 'Select']) ?>
=======
            <?= $form->field($model, 'provinsi')->dropDownList( [1 => 'Jawa Timur', 2 => 'Jawa Barat'],['prompt' => 'Pilih Provinsi']) ?>
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
        </div>
    </div>
    </div>
    <br>
    
    <div class="row">
    <div class="col-md-4">
        <div class="form-group"> 
            <?= $form->field($model, 'pria')->textInput() ?>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group"> 
            <?= $form->field($model, 'wanita')->textInput() ?>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group"> 
            <?= $form->field($model, 'jumlah')->textInput() ?>
        </div>
    </div>

    </div>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
