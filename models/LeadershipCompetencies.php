<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "leadership_competencies".
 *
 * @property int $id
 * @property int|null $core_id
 * @property int|null $area_id
 * @property string|null $definition
 * @property string|null $objectives
 * @property string $created_at
 */
class LeadershipCompetencies extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leadership_competencies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['core_id', 'area_id', 'definition', 'objectives'], 'default', 'value' => null],
            [['core_id', 'area_id'], 'integer'],
            [['created_at'], 'safe'],
            [['definition', 'objectives'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'core_id' => 'Core Area',
            'area_id' => 'Area ID',
            'definition' => 'Definition',
            'objectives' => 'Objectives',
            'created_at' => 'Created At',
        ];
    }

    public function getArea()
    {
        return $this->hasOne(MasterPerformanceManagement::class, ['id' => 'area_id']);
    }
    

}
