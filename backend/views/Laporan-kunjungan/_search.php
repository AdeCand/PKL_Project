<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LapKunAsingCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lap-kun-asing-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_lap_asing') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'bulan') ?>

    <?= $form->field($model, 'negara') ?>

    <?= $form->field($model, 'pria') ?>

    <?php // echo $form->field($model, 'wanita') ?>

    <?php // echo $form->field($model, 'jumlah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
