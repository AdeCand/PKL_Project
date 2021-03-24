<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BeritaCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_berita') ?>

    <?= $form->field($model, 'judul_berita') ?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'deskripsi_singkat') ?>

>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'gambar') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'tanggal') ?>
=======
    <?php // echo $form->field($model, 'tanggal') ?>
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
