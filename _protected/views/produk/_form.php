<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <div class="col-md-6">

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'harga')->textInput() ?>

        <?= $form->field($model, 'stok')->textInput() ?>

        <?= $form->field($model, 'status')->widget(Select2::classname(), [
            'data' => ['1' => 'Tampilkan', '2' => 'Tidak ditampilkan'],
            'options' => ['placeholder' => 'Pilih Status'],
        ]);?>

    </div>

    <div class="col-md-6">
        <?= $form->field($model, 'foto')->widget(FileInput::classname(), [
                 'options' => ['accept' => 'image/*'],
             ])
        ?>

        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
