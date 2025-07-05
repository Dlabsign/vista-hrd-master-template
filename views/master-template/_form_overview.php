<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

/** @var yii\web\View $this */
/** @var app\models\TemplateOverview[]|app\models\TemplateOverview $models */
/** @var int $positionId */
?>

<div class="template-overview-form">

    <?php $form = ActiveForm::begin([
        'id' => 'dynamic-form'
    ]); ?>

    <?php if (isset($models) && is_array($models)): ?>

        <?php DynamicFormWidget::begin([
            'widgetContainer' => 'dynamicform_wrapper', // required
            'widgetBody' => '.container-items',         // required
            'widgetItem' => '.item',                    // required
            'limit' => 100,                             // max items
            'min' => 1,                                  // min items
            'insertButton' => '.add-item',              // button to add item
            'deleteButton' => '.remove-item',           // button to remove item
            'model' => $models[0],
            'formId' => 'dynamic-form',
            'formFields' => ['general', 'leadership', 'target', 'work'],
        ]); ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>General</th>
                    <th>Leadership</th>
                    <th>Target</th>
                    <th>Work</th>
                    <th style="width: 5%">Action</th>
                </tr>
            </thead>
            <tbody class="container-items">
                <?php foreach ($models as $index => $model): ?>
                    <tr class="item">
                        <td class="row-index"><?= $index + 1 ?></td>
                        <td><?= $form->field($model, "[{$index}]general")->textInput()->label(false) ?></td>
                        <td><?= $form->field($model, "[{$index}]leadership")->textInput()->label(false) ?></td>
                        <td><?= $form->field($model, "[{$index}]target")->textInput()->label(false) ?></td>
                        <td><?= $form->field($model, "[{$index}]work")->textInput()->label(false) ?></td>
                        <td>
                            <button type="button" class="remove-item btn btn-danger">−</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="d-grid gap-2">
            <button type="button" class="add-item btn btn-primary w-100">+ Tambah Baris</button>
            <?= Html::submitButton('Simpan Semua', ['class' => 'btn btn-success w-100']) ?>
        </div>

        <?php DynamicFormWidget::end(); ?>

    <?php elseif (isset($model)): ?>

        <?= $form->field($model, 'general')->textInput() ?>
        <?= $form->field($model, 'leadership')->textInput() ?>
        <?= $form->field($model, 'target')->textInput() ?>
        <?= $form->field($model, 'work')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        </div>

    <?php endif; ?>

    <?php ActiveForm::end(); ?>
</div>