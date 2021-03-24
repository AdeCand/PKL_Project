<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\LapKunNus;

/**
 * LapKunNusCari represents the model behind the search form of `backend\models\LapKunNus`.
 */
class LapKunNusCari extends LapKunNus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lap_nus', 'id_user', 'provinsi', 'pria', 'wanita', 'jumlah'], 'integer'],
            [['bulan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = LapKunNus::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_lap_nus' => $this->id_lap_nus,
            'id_user' => $this->id_user,
            'provinsi' => $this->provinsi,
            'pria' => $this->pria,
            'wanita' => $this->wanita,
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'bulan', $this->bulan]);

        return $dataProvider;
    }
}
