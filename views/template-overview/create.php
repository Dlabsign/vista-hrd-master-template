<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TemplateOverview $model */

$this->title = 'Create Template Overview';
$this->params['breadcrumbs'][] = ['label' => 'Template Overviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="template-overview-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
