<?php

namespace app\models;

use Yii;

class MasterPerformanceManagement extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'master_performance_management';
    }
    public function rules()
    {
        return [
            [['core', 'key_val'], 'required'],
            [['flag'], 'integer'],
            [['created_at'], 'safe'],
            [['core', 'key_val', 'definition'], 'string', 'max' => 100],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'core' => 'Core Area',
            'key_val' => 'Key Val',
            'definition' => 'Definition',
            'flag' => 'flag',
            'created_at' => 'Created At',
        ];
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
