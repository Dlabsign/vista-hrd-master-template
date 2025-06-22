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
            [['area_id', 'flag'], 'integer'],
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
            'area_id' => 'Area',
            'definition' => 'Definition',
            'objectives' => 'Objectives',
            'created_at' => 'Created At',
            'flag' => 'flag',
        ];
    }

    public function getArea()
    {
        return $this->hasOne(MasterPerformanceManagement::class, ['id' => 'area_id']);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->created_at = date('Y-m-d H:i:s');
                $this->flag = 1; // Set default aktif
            }
            return true;
        }
        return false;
    }

    public function delete()
    {
        // Soft delete: hanya update kolom flag = 0
        $this->flag = 0;
        return $this->save(false, ['flag']); // Simpan hanya kolom flag
    }
}
