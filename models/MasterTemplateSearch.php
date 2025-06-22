<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MasterTemplate;

class MasterTemplateSearch extends MasterTemplate
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'position_id', 'technical', 'general', 'leadership'], 'integer'],
            [['department', 'division', 'created_at'], 'safe'],
            [['unit'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params, $formName = null)
    {
        $query = MasterTemplate::find()->where(['flag' => 1]);

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
            'position_id' => $this->position_id,
            'technical' => $this->technical,
            'general' => $this->general,
            'unit' => $this->unit,
            'leadership' => $this->leadership,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'division', $this->division]);

        return $dataProvider;
    }
}
