<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Kecamatan;

/* @var $this yii\web\View */
/* @var $model backend\models\Akomodasi */
/* @var $form yii\widgets\ActiveForm */
?>
<br><br>
<div class="akomodasi-form">
<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box box-success">
                <div class="box-header with-border">
                    <div class="col-sm-8 col-md-offset-2">
                    <center> <h2><b>Akomodasi</b></h2>
                    <hr style="height:2px; border:none;background-color:#008d4c;"> <br>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_akomodasi')->textInput(['maxlength' => true])->input('nama_akomodasi', ['placeholder' => "Masukkan Nama Akomodasi"])?>

    <?= $form->field($model, 'kecamatan')->dropDownList(['Batu' => 'Batu', 'Junrejo' => 'Junrejo', 'Bumiaji' => 'Bumiaji'],['prompt'=>'Pilih Kecamatan']) ?>
    <div class="form-group">
        <br>
        <?= Html::submitButton(' &nbsp Simpan', ['class' => 'fa fa-save btn btn-lg btn-success']) ?>

    </div>

    <?php ActiveForm::end(); ?>
                    </center>
</div>
