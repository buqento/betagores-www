<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Pesanan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesanan-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'tanggal',
            'pengguna_id',
            'produk_id',
            'jumlah',
            'total_bayar',
            'status',
            'keterangan',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
