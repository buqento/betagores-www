<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */

$this->title = 'Ubah Produk';
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="produk-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
