<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_position".
 *
 * @property int $id
 * @property int|null $job
 * @property string $position_name
 * @property int $position_department
 * @property int $position_office_status
 * @property int $position_office_placement
 * @property int $is_void
 * @property string $timestamp
 * @property int|null $group_sort
 */
class MasterPosition extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_position';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job', 'group_sort'], 'default', 'value' => null],
            [['id', 'position_name', 'position_department', 'position_office_status', 'position_office_placement', 'is_void'], 'required'],
            [['id', 'job', 'position_department', 'position_office_status', 'position_office_placement', 'is_void', 'group_sort'], 'integer'],
            [['timestamp'], 'safe'],
            [['position_name'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job' => 'Job',
            'position_name' => 'Position Name',
            'position_department' => 'Position Department',
            'position_office_status' => 'Position Office Status',
            'position_office_placement' => 'Position Office Placement',
            'is_void' => 'Is Void',
            'timestamp' => 'Timestamp',
            'group_sort' => 'Group Sort',
        ];
    }
    public function getDepartment()
    {
        return $this->hasOne(MasterDepartment::class, ['id' => 'position_department']);
    }
}
