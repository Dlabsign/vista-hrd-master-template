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
            'created_at' => 'Created At',
        ];
    }

}
