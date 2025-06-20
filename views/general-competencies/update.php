<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GeneralCompetencies $model */

$this->title = 'Update General Competencies: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'General Competencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="general-competencies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
