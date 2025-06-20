<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MasterTemplateSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-template-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'position_id') ?>

    <?= $form->field($model, 'department') ?>

    <?= $form->field($model, 'division') ?>

    <?= $form->field($model, 'technical') ?>

    <?php // echo $form->field($model, 'general') ?>

    <?php // echo $form->field($model, 'unit') ?>

    <?php // echo $form->field($model, 'leadership') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>