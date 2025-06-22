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
            [['definition_id', 'area_id', 'technical', 'general', 'leadership', 'flag'], 'integer'],
            [['weight'], 'number'],
            [['created_at', 'unit', 'key_result', 'template_type'], 'safe'],
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
            'definition_id' => 'Definition',
            'technical' => 'Technical',
            'general' => 'General',
            'unit' => 'Unit',
            'weight' => 'Weight',
            'key_result' => 'Key Result',
            'leadership' => 'Leadership',
            'template_type' => 'Template',
            'created_at' => 'Created At',
            'flag' => 'Flag',
        ];
    }

    public function getArea()
    {
        return $this->hasOne(MasterPerformanceManagement::class, ['id' => 'area_id']);
    }
    public function getCores()
    {
        return $this->hasOne(MasterPerformanceManagement::class, ['id' => 'core_id']);
    }

    public function getGeneralas()
    {
        return $this->hasOne(GeneralCompetencies::class, ['id' => 'area_id']);
    }

    public function getLeadershipas()
    {
        return $this->hasOne(LeadershipCompetencies::class, ['id' => 'area_id']);
    }

    // public function beforeSave($insert)
    // {
    //     if (parent::beforeSave($insert)) {
    //         if ($insert) {
    //             $this->created_at = date('Y-m-d H:i:s');
    //             $this->flag = 1; // Set default aktif
    //         }
    //         return true;
    //     }
    //     return false;
    // }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        if ($insert) {
            $this->created_at = date('Y-m-d H:i:s');
            $this->flag = 1;
        }

        $mpm = MasterPerformanceManagement::findOne($this->area_id);
        if ($mpm) {
            $this->key_result = $mpm->key_val; // Simpan teks key_val sebagai info tambahan
        }

        return true;
    }

    public function delete()
    {
        // Soft delete: hanya update kolom flag = 0
        $this->flag = 0;
        return $this->save(false, ['flag']); // Simpan hanya kolom flag
    }
}
