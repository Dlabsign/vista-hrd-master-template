<?php

use app\models\MasterPerformanceManagement;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\GeneralCompetencies $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="general-competencies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'core_id')->dropDownList(
        ArrayHelper::map(MasterPerformanceManagement::find()->where(['flag' => 1])->all(), 'id', 'core')
    ) ?>

    <?= $form->field($model, 'area_id')->dropDownList(
        ArrayHelper::map(MasterPerformanceManagement::find()->where(['flag' => 1])->all(), 'id', 'key_val')
    ) ?>

    <?= $form->field($model, 'definition')->dropDownList(
        ArrayHelper::map(MasterPerformanceManagement::find()->where(['flag' => 1])->all(), 'id', 'definition')
    ) ?>
    <?= $form->field($model, 'objectives')->textarea(['rows' => 6]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>