<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property int $id_berita
 * @property string $judul_berita
<<<<<<< HEAD
=======
 * @property string $deskripsi_singkat
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
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
<<<<<<< HEAD
            [['judul_berita', 'deskripsi', 'gambar', 'tanggal'], 'required'],
            [['deskripsi'], 'string'],
            [['tanggal'], 'safe'],
            [['judul_berita', 'gambar'], 'string', 'max' => 50],
=======
            [['judul_berita', 'deskripsi_singkat', 'deskripsi', 'gambar', 'tanggal'], 'required'],
            [['deskripsi'], 'string'],
            [['tanggal'], 'safe'],
            [['judul_berita', 'gambar'], 'string', 'max' => 50],
            [['deskripsi_singkat'], 'string', 'max' => 100],
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
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
<<<<<<< HEAD
=======
            'deskripsi_singkat' => 'Deskripsi Singkat',
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
            'deskripsi' => 'Deskripsi',
            'gambar' => 'Gambar',
            'tanggal' => 'Tanggal',
        ];
    }
}
