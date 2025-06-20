<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\GeneralCompetencies $model */

$this->title = 'Create General Competencies';
$this->params['breadcrumbs'][] = ['label' => 'General Competencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="general-competencies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
