<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TemplateOverview $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="template-overview-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'general')->textInput() ?>

    <?= $form->field($model, 'leadership')->textInput() ?>

    <?= $form->field($model, 'target')->textInput() ?>

    <?= $form->field($model, 'work')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
