<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MasterPosition;

/**
 * MasterPositionSearch represents the model behind the search form of `app\models\MasterPosition`.
 */
class MasterPositionSearch extends MasterPosition
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_void'], 'integer'],
            [['position_name', 'timestamp', 'position_department', 'position_office_status', 'position_office_placement'], 'safe'],
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
        $query = MasterPosition::find();
        $query->joinWith(['department']);
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
            'master_position.is_void' => 0,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'position_name', $this->position_name]);
        $query->andFilterWhere(['like', 'master_department.department_name', $this->position_department]);
        return $dataProvider;
    }
}
