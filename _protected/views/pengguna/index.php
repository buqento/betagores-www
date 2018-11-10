<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenggunaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengguna';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'username',
            // 'password',
            'nama_lengkap',
            'telepon',
            'email:email',
            'alamat',
            'created_at',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
