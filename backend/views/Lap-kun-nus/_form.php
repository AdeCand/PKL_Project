<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Provinsi;

/* @var $this yii\web\View */
/* @var $model backend\models\LapKunNus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lap-kun-nus-form">
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box box-success">
                <div class="box-header with-border">
                    <div class="col-sm-8 col-md-offset-2">
                    <center> <h2><b>Kunjungan Wisatawan Nusantara</b></h2>
                    <hr style="height:2px; border:none;background-color:#008d4c;"> <br>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->hiddenInput(['value'=>Yii::$app->user->identity->id])->label(false) ?>

    <?= $form->field($model, 'bulan')->dropDownList(['Januari' => 'Januari', 'Februari' => 'Februari', 'Maret' => 'Maret', 'April' => 'April', 'Mei' => 'Mei', 'Juni' => 'Juni', 'Juli' => 'Juli', 'Agustus' =>'Agustus'],['prompt'=>'Pilih Bulan']) ?>

    <?= $form->field($model, 'provinsi')->dropDownList(
                ArrayHelper::map(Provinsi::find()->all(),'id_provinsi', 'provinsi'),['prompt'=>'Pilih Provinsi']);?>

    <?= $form->field($model, 'pria')->textInput(['type'=>'number'])->input('nama_akomodasi', ['placeholder' => "Jumlah Pengunjung Pria"]) ?>
    <?= $form->field($model, 'wanita')->textInput(['type'=>'number'])->input('nama_akomodasi', ['placeholder' => "Jumlah Pengunjung Wanita"]) ?>

    <?= $form->field($model, 'jumlah')->textInput(['type'=>'number'])->input('nama_akomodasi', ['placeholder' => "Total"]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
