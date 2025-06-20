<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work_performance".
 *
 * @property int $id
 * @property int|null $area_id
 * @property string|null $definition
 * @property string|null $objectives
 * @property string $created_at
 */
class WorkPerformance extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work_performance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area_id', 'definition', 'objectives'], 'default', 'value' => null],
            [['area_id'], 'integer'],
            [['definition', 'objectives'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area_id' => 'Core Area',
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
