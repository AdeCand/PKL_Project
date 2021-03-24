<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lap_kun_asing".
 *
 * @property int $id_lap_asing
 * @property int $id_user
 * @property string $bulan
 * @property int $negara
 * @property int $pria
 * @property int $wanita
 * @property int $jumlah
 *
 * @property Negara $negara0
 */
class LapKunAsing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lap_kun_asing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'bulan', 'negara', 'pria', 'wanita', 'jumlah'], 'required'],
            [['id_user', 'negara', 'pria', 'wanita', 'jumlah'], 'integer'],
            [['bulan'], 'string', 'max' => 25],
            [['negara'], 'exist', 'skipOnError' => true, 'targetClass' => Negara::className(), 'targetAttribute' => ['negara' => 'id_negara']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lap_asing' => 'Id Lap Asing',
            'id_user' => 'Id User',
            'bulan' => 'Bulan',
            'negara' => 'Negara',
            'pria' => 'Pria',
            'wanita' => 'Wanita',
            'jumlah' => 'Jumlah',
        ];
    }

    /**
     * Gets query for [[Negara0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNegara0()
    {
        return $this->hasOne(Negara::className(), ['id_negara' => 'negara']);
    }
}
