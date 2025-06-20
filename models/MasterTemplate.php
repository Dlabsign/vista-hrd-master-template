<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_template".
 *
 * @property int $id
 * @property int $position_id
 * @property string $department
 * @property string $division
 * @property int $technical
 * @property int $general
 * @property float $unit
 * @property int $leadership
 * @property string $created_at
 */
class MasterTemplate extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_template';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['core_id', 'definition_id', 'area_id', 'technical', 'general', 'leadership'], 'integer'],
            [['weight'], 'number'],
            [['created_at', 'objectives', 'unit', 'key_result', 'template_type'], 'safe'],
            [['division'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position_id' => 'Position ID',
            'department' => 'Department',
            'definition_id' => 'Definition',
            'division' => 'Division',
            'technical' => 'Technical',
            'objectives' => 'Objectives',
            'general' => 'General',
            'unit' => 'Unit',
            'weight' => 'Weight',
            'key_result' => 'Key Result',
            'leadership' => 'Leadership',
            'template_type' => 'Template',
            'created_at' => 'Created At',
        ];
    }

    public function getArea()
    {
        return $this->hasOne(MasterPerformanceManagement::class, ['id' => 'area_id']);
    }
    public function getCore()
    {
        return $this->hasOne(MasterPerformanceManagement::class, ['id' => 'core_id']);
    }
}
