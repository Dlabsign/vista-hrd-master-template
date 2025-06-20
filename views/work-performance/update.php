<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WorkPerformance $model */

$this->title = 'Update Work Performance: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Work Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="work-performance-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
