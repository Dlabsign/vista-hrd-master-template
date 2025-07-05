<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TemplateOverview $model */

$this->title = 'Update Template Overview: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Template Overviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="template-overview-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
