<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\LeadershipCompetencies $model */

$this->title = 'Create Leadership Competencies';
$this->params['breadcrumbs'][] = ['label' => 'Leadership Competencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leadership-competencies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
