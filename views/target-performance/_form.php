<?php

use app\models\MasterPerformanceManagement;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TargetPerformance $model */
/** @var yii\widgets\ActiveForm $form */
?>
<?php
/** @var MasterPerformanceManagement[] $items */
$items = MasterPerformanceManagement::find()
    ->where(['flag' => 1])
    ->all();

// key = primary key (id), value = label core – key_val
$options = ArrayHelper::map(
    $items,
    'id',
    function ($m) {
        return $m->core . ' - ' . $m->key_val;
    }
);
?>

<div class="target-performance-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'area_id')->dropDownList($options, ['prompt' => '- pilih area -']) ?>

    <?= $form->field($model, 'unit')->dropDownList([
        'Nominal' => 'Nominal',
        'Percentage' => 'Percentage',
        'Currency' => 'Currency',
        'Rating' => 'Rating',
    ], ['prompt' => '-']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>