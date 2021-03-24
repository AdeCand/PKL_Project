<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Berita;

/**
 * BeritaCari represents the model behind the search form of `backend\models\Berita`.
 */
class BeritaCari extends Berita
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_berita'], 'integer'],
<<<<<<< HEAD
            [['judul_berita', 'deskripsi', 'gambar', 'tanggal'], 'safe'],
=======
            [['judul_berita', 'deskripsi_singkat', 'deskripsi', 'gambar', 'tanggal'], 'safe'],
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
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
        $query = Berita::find();

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
            'id_berita' => $this->id_berita,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'judul_berita', $this->judul_berita])
<<<<<<< HEAD
=======
            ->andFilterWhere(['like', 'deskripsi_singkat', $this->deskripsi_singkat])
>>>>>>> 1eb965a57df753cc4fdcf4fd32b093e47d8dc6e7
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'gambar', $this->gambar]);

        return $dataProvider;
    }
}
