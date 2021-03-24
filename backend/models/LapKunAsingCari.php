<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\LapKunAsing;

/**
 * LapKunAsingCari represents the model behind the search form of `backend\models\LapKunAsing`.
 */
class LapKunAsingCari extends LapKunAsing
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lap_asing', 'id_user', 'negara', 'pria', 'wanita', 'jumlah'], 'integer'],
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
        $query = LapKunAsing::find();

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
            'id_lap_asing' => $this->id_lap_asing,
            'id_user' => $this->id_user,
            'negara' => $this->negara,
            'pria' => $this->pria,
            'wanita' => $this->wanita,
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'bulan', $this->bulan]);

        return $dataProvider;
    }
}
