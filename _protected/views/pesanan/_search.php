<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'pengguna_id') ?>

    <?= $form->field($model, 'produk_id') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'total_bayar') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
