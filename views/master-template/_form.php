<?php

use app\models\MasterPerformanceManagement;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MasterTemplate $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-template-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'core_id')->dropDownList(
        ArrayHelper::map(MasterPerformanceManagement::find()->all(), 'id', 'core')
    ) ?>

    <?= $form->field($model, 'area_id')->dropDownList(
        ArrayHelper::map(MasterPerformanceManagement::find()->all(), 'id', 'key_val')
    ) ?>

    <?= $form->field($model, 'objectives')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>