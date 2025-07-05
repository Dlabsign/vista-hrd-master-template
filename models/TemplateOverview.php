<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "template_overview".
 *
 * @property int $general
 * @property int $leadership
 * @property int $target
 * @property int $position_id
 * @property int $work
 */
class TemplateOverview extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template_overview';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['general', 'leadership', 'target', 'work'], 'required'],
            [['general', 'leadership', 'target', 'work', 'flag'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'general' => 'General',
            'leadership' => 'Leadership',
            'target' => 'Target',
            'work' => 'Work',
            'created_at' => 'Created At ',
            'flag' => 'Flag',
        ];
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        if ($insert && $this->flag === null) {
            $this->flag = 1;
        }

        return true;
    }


    public function delete()
    {
        $this->flag = 0;
        return $this->save(false, ['flag']);
    }


    public static function createMultiple($modelClass, $multipleModels = [])
    {
        $model = new $modelClass;
        $formName = $model->formName();
        $post = Yii::$app->request->post($formName);
        $models = [];

        if (!empty($multipleModels)) {
            $keys = array_keys(ArrayHelper::map($multipleModels, 'id', 'id'));
        }

        if ($post && is_array($post)) {
            foreach ($post as $i => $item) {
                if (isset($item['id']) && !empty($item['id']) && !empty($keys) && in_array($item['id'], $keys)) {
                    $models[] = $multipleModels[$item['id']];
                } else {
                    $models[] = new $modelClass;
                }
            }
        }

        return $models;
    }

}
