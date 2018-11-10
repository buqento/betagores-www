<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Produk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'kode',
            'nama',
            // 'foto:ntext',
            'keterangan',
            'harga',
            'stok',
            //'status',
            //'kategori_id',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
