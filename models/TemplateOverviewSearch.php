<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TemplateOverview;

/**
 * TemplateOverviewSearch represents the model behind the search form of `app\models\TemplateOverview`.
 */
class TemplateOverviewSearch extends TemplateOverview
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'general', 'leadership', 'target', 'work'], 'integer'],
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
        $query = TemplateOverview::find();

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
            'general' => $this->general,
            'leadership' => $this->leadership,
            'target' => $this->target,
            'work' => $this->work,
        ]);

        return $dataProvider;
    }
}
