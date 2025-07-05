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


    public static function tableName()
    {
        return 'general_competencies';
    }

    public function rules()
    {
        return [
            [['core_id', 'area_id', 'definition', 'objectives'], 'required'],
            [['core_id', 'area_id', 'flag'], 'integer'],
            [['created_at'], 'safe'],
            [['definition', 'objectives', 'objectives_indo'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'core_id' => 'Core Value',
            'area_id' => 'Key Area',
            'definition' => 'Definition',
            'objectives' => 'Objectives',
            'objectives_indo' => 'Objectives',
            'flag' => 'flag',
            'created_at' => 'Created At',
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
