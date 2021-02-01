<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\frontend\models\LaporanKunjungan;

/* @var $this yii\web\View */
/* @var $model frontend\models\LaporanKunjungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="laporan-kunjungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id_user')->textInput() ?> -->

    <?= $form->field($model, 'jenis_wisatawan')->dropDownList(['Wisatawan Asing' => 'Wisatawan Asing', 
    'Wisatawan  Lokal' => 'Wisatawan Lokal']) ?>

    <?= $form->field($model, 'negara')->textInput() ?>

    <?= $form->field($model, 'provinsi')->textInput() ?>

    <?= $form->field($model, 'pria')->textInput() ?>

    <?= $form->field($model, 'wanita')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
