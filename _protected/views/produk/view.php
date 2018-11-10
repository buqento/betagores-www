<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-view">

    <div class="col-md-4">
        <img class="img-thumbnail" src="<?= $model->foto ?>">
    </div>
    
    <div class="col-md-8">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                // 'id',
                'kode',
                'nama',
                // 'foto:ntext',
                'keterangan',
                'harga',
                'stok',
                'status',
                // 'kategori_id',
                'created_at',
            ],
        ]) ?>
    </div>

</div>
