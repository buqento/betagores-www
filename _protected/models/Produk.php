<?php

namespace app\models;
use yii\web\UploadedFile;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property string $foto
 * @property string $keterangan
 * @property int $harga
 * @property int $stok
 * @property int $status
 * @property int $kategori_id
 * @property string $created_at
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'foto', 'keterangan', 'harga', 'stok', 'status'], 'required'],
            [['harga', 'stok', 'status', 'kategori_id'], 'integer'],
            [['created_at'], 'safe'],
            [['kode'], 'string', 'max' => 6],
            [['nama'], 'string', 'max' => 100],
            [['keterangan'], 'string', 'max' => 50],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'foto' => 'Foto',
            'keterangan' => 'Keterangan',
            'harga' => 'Harga',
            'stok' => 'Stok',
            'status' => 'Status',
            'kategori_id' => 'Kategori ID',
            'created_at' => 'Created At',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->foto->saveAs('images/' . $this->foto->baseName . '.' . $this->foto->extension);
            return true;
        } else {
            return false;
        }
    }

}
