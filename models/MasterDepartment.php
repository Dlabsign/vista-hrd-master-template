<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_department".
 *
 * @property int $id
 * @property string $department_name
 * @property int|null $no_urut
 * @property string $group_dept
 * @property int $is_void
 * @property string $timestamp
 */
class MasterDepartment extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_urut'], 'default', 'value' => null],
            [['id', 'department_name', 'group_dept', 'is_void'], 'required'],
            [['id', 'no_urut', 'is_void'], 'integer'],
            [['timestamp'], 'safe'],
            [['department_name', 'group_dept'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_name' => 'Department Name',
            'no_urut' => 'No Urut',
            'group_dept' => 'Group Dept',
            'is_void' => 'Is Void',
            'timestamp' => 'Timestamp',
        ];
    }

}
