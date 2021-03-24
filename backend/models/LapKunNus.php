<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lap_kun_nus".
 *
 * @property int $id_lap_nus
 * @property int $id_user
 * @property string $bulan
 * @property int $provinsi
 * @property int $pria
 * @property int $wanita
 * @property int $jumlah
 */
class LapKunNus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lap_kun_nus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'bulan', 'provinsi', 'pria', 'wanita', 'jumlah'], 'required'],
            [['id_user', 'provinsi', 'pria', 'wanita', 'jumlah'], 'integer'],
            [['bulan'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lap_nus' => 'Id Lap Nus',
            'id_user' => 'Id User',
            'bulan' => 'Bulan',
            'provinsi' => 'Provinsi',
            'pria' => 'Pria',
            'wanita' => 'Wanita',
            'jumlah' => 'Jumlah',
        ];
    }
}
