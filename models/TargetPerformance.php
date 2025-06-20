<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "target_performance".
 *
 * @property int $id
 * @property int|null $area_id
 * @property string|null $result
 * @property float|null $unit
 * @property string $created_at
 */
class TargetPerformance extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'target_performance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area_id', 'result', 'unit'], 'default', 'value' => null],
            [['area_id'], 'integer'],
            [['created_at', 'unit'], 'safe'],
            [['result'], 'string', 'max' => 100],
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
            'result' => 'Result',
            'unit' => 'Unit',
            'created_at' => 'Created At',
        ];
    }
    public function getArea()
    {
        return $this->hasOne(MasterPerformanceManagement::class, ['id' => 'area_id']);
    }
}
