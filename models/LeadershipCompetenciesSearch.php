<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LeadershipCompetencies;

/**
 * LeadershipCompetenciesSearch represents the model behind the search form of `app\models\LeadershipCompetencies`.
 */
class LeadershipCompetenciesSearch extends LeadershipCompetencies
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'core_id', 'area_id'], 'integer'],
            [['definition', 'objectives', 'created_at'], 'safe'],
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = LeadershipCompetencies::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'core_id' => $this->core_id,
            'area_id' => $this->area_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'definition', $this->definition])
            ->andFilterWhere(['like', 'objectives', $this->objectives]);

        return $dataProvider;
    }
}
