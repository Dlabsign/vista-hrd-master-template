<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "target_performance".
 *
 * @property int $id
 * @property int|null $area_id
 * @property string|null $key_result
 * @property float|null $unit
 * @property string $created_at
 */
class TargetPerformance extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'target_performance';
    }

    public function rules()
    {
        return [
            [['area_id', 'flag'], 'integer'],
            [['unit', 'key_result',], 'safe'],
            [['created_at'], 'datetime', 'format' => 'php:Y-m-d H:i:s'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area_id' => 'Core Area',
            'key_result' => 'key_result',
            'unit' => 'Unit',
            'flag' => 'flag',
            'created_at' => 'Created At',
        ];
    }
    public function getArea()
    {
        return $this->hasOne(MasterPerformanceManagement::class, ['id' => 'area_id']);
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
