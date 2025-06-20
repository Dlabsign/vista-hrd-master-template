<?php

use app\models\MasterPerformanceManagement;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TargetPerformance $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="target-performance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'area_id')->dropDownList(
        ArrayHelper::map(MasterPerformanceManagement::find()->all(), 'id', 'key_val')
    ) ?>
    <?= $form->field($model, 'result')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit')->dropDownList([
        'Nominal' => 'Nominal',
        'Percentage' => 'Percentage',
        'Currency' => 'Currency',
        'Rating' => 'Rating',
    ], ['prompt' => '- Select Unit -']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>