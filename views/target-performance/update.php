<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TargetPerformance $model */

$this->title = 'Update Target Performance: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Target Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="target-performance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
