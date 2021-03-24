<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dtw".
 *
 * @property int $id_dtw
 * @property string $nama_dtw
 * @property int $kecamatan
 * @property string $nama_kecamatan
 */
class Dtw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dtw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['nama_dtw', 'kecamatan'], 'required'],
            [['nama_dtw'], 'string', 'max' => 50],
            [['kecamatan'], 'string', 'max' => 15],
=======
            [['nama_dtw', 'kecamatan', 'nama_kecamatan'], 'required'],
            [['kecamatan'], 'integer'],
            [['nama_dtw'], 'string', 'max' => 50],
            [['nama_kecamatan'], 'string', 'max' => 15],
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dtw' => 'Id Dtw',
            'nama_dtw' => 'Nama Dtw',
            'kecamatan' => 'Kecamatan',
<<<<<<< HEAD
=======
            'nama_kecamatan' => 'Nama Kecamatan',
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
        ];
    }
}
