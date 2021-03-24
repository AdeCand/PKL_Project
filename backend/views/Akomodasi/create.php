<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Akomodasi */

$this->title = 'Tambah Akomodasi';
$this->params['breadcrumbs'][] = ['label' => 'Akomodasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akomodasi-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
