<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesanan".
 *
 * @property int $id
 * @property string $tanggal
 * @property int $pengguna_id
 * @property int $produk_id
 * @property int $jumlah
 * @property int $total_bayar
 * @property int $status
 * @property string $keterangan
 */
class Pesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['pengguna_id', 'produk_id', 'jumlah', 'total_bayar', 'status', 'keterangan'], 'required'],
            [['pengguna_id', 'produk_id', 'jumlah', 'total_bayar', 'status'], 'integer'],
            [['keterangan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'pengguna_id' => 'Pengguna ID',
            'produk_id' => 'Produk ID',
            'jumlah' => 'Jumlah',
            'total_bayar' => 'Total Bayar',
            'status' => 'Status',
            'keterangan' => 'Keterangan',
        ];
    }
}
