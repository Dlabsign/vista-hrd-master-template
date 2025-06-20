<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TargetPerformance;

/**
 * TargetPerformanceSearch represents the model behind the search form of `app\models\TargetPerformance`.
 */
class TargetPerformanceSearch extends TargetPerformance
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'area_id'], 'integer'],
            [['result', 'created_at'], 'safe'],
            [['unit'], 'number'],
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
        $query = TargetPerformance::find();

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
            'area_id' => $this->area_id,
            'unit' => $this->unit,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'result', $this->result]);

        return $dataProvider;
    }
}
