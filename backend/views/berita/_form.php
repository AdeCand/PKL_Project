<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

<<<<<<< HEAD
=======

>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
/* @var $this yii\web\View */
/* @var $model backend\models\Berita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_berita')->textInput(['maxlength' => true]) ?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'deskripsi_singkat')->textInput(['maxlength' => true]) ?>

>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gambar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

<<<<<<< HEAD
=======
    <?= $form->labelEx($model, 'image'); ?>

    <?= CHtml::activeFileField($model, 'image'); ?>

    <?= $form->error($model, 'image'); ?>

>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
