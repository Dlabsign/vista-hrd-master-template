<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\MasterPerformanceManagement;

/** @var yii\web\View $this */
/** @var app\models\MasterTemplate $model */
/** @var yii\widgets\ActiveForm $form */
?>

<?php
$items = MasterPerformanceManagement::find()
    ->where(['flag' => 1])
    ->all();

$options = ArrayHelper::map($items, 'id', function ($model) {
    return $model->core . ' - ' . $model->key_val;
});
?>

<div class="master-template-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'area_id')->dropDownList($options, ['prompt' => '-']) ?>


    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'unit')->dropDownList([
        'Nominal' => 'Nominal',
        'Percentage' => 'Percentage',
        'Currency' => 'Currency',
        'Rating' => 'Rating',
    ], ['prompt' => '- Select Unit -']) ?>


    <?= $form->field($model, 'template_type')->dropDownList([
        'Probation' => 'Probation',
        'PKWT 1' => 'PKWT 1',
        'PKWT 2' => 'PKWT 2',
    ], ['prompt' => '- Select Unit -']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>