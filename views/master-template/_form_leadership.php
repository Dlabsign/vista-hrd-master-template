<?php
use app\models\GeneralCompetencies;
use app\models\LeadershipCompetencies;
use app\models\MasterPerformanceManagement;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\GeneralCompetencies $model */
/** @var yii\widgets\ActiveForm $form */
?>

<?php
/** @var MasterPerformanceManagement[] $items */
$items = LeadershipCompetencies::find()
    ->where(['flag' => 1])
    ->all();

// key = primary key (id), value = label core – key_val
$options = ArrayHelper::map(
    $items,
    'id',
    function ($m) {
        return $m->area->core . ' - ' . $m->area->key_val . ' - ' . $m->area->definition . ' - ' . $m->objectives;
    }
);
?>

<div class="general-competencies-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'area_id')->dropDownList($options, ['prompt' => '- pilih area -']) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>