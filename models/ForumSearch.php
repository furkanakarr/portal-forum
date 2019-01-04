<?php

namespace vendor\kouosl\forum\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\forum\models\Forum;

/**
 * ForumSearch represents the model behind the search form of `vendor\kouosl\forum\models\Forum`.
 */
class ForumSearch extends Forum
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Kullanici_Adi', 'Sifre', 'Soru', 'Yanit'], 'safe'],
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
        $query = Forum::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'Kullanici_Adi', $this->Kullanici_Adi])
            ->andFilterWhere(['like', 'Sifre', $this->Sifre])
            ->andFilterWhere(['like', 'Soru', $this->Soru])
            ->andFilterWhere(['like', 'Yanit', $this->Yanit]);

        return $dataProvider;
    }
}
