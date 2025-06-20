<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "general_competencies".
 *
 * @property int $id
 * @property int $core_id
 * @property int $area_id
 * @property string $definition
 * @property string $objectives
 * @property string $created_at
 */
class GeneralCompetencies extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'general_competencies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['core_id', 'area_id', 'definition', 'objectives'], 'required'],
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
            'core_id' => 'Core Value',
            'area_id' => 'Key Area',
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
