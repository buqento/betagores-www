<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $nama_lengkap
 * @property string $telepon
 * @property string $email
 * @property string $alamat
 * @property string $created_at
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama_lengkap', 'telepon', 'email'], 'required'],
            [['created_at'], 'safe'],
            [['username', 'password', 'nama_lengkap', 'alamat'], 'string', 'max' => 100],
            [['telepon'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'nama_lengkap' => 'Nama Lengkap',
            'telepon' => 'Telepon',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'created_at' => 'Created At',
        ];
    }
}
