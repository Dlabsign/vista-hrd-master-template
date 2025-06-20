<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\LeadershipCompetencies $model */

$this->title = 'Update Leadership Competencies: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Leadership Competencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="leadership-competencies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
