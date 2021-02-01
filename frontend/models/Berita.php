<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property int $id_berita
 * @property string $judul_berita
 * @property string $deskripsi
 * @property string $gambar
 * @property string $tanggal
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul_berita', 'deskripsi', 'gambar', 'tanggal'], 'required'],
            [['deskripsi'], 'string'],
            [['tanggal'], 'safe'],
            [['judul_berita', 'gambar'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_berita' => 'Id Berita',
            'judul_berita' => 'Judul Berita',
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
            'tanggal' => 'Tanggal',
        ];
    }
}
