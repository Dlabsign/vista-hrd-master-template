<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MasterPerformanceManagement $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-performance-management-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'core')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'key_val')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'definition')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>