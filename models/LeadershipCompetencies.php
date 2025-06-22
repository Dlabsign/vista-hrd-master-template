<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "leadership_competencies".
 *
 * @property int $id
 * @property int|null $core_id
 * @property int|null $area_id
 * @property string|null $definition
 * @property string|null $objectives
 * @property string $created_at
 *  * @property int|null $flag

 */
class LeadershipCompetencies extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leadership_competencies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['core_id', 'area_id', 'definition', 'objectives'], 'default', 'value' => null],
            [['core_id', 'area_id', 'flag'], 'integer'],
            [['created_at'], 'safe'],
            [['definition', 'objectives'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'core_id' => 'Core Area',
            'area_id' => 'Key Area',
            'definition' => 'Definition',
            'objectives' => 'Objectives',
            'flag' => 'Flag',
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
