<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterPerformanceManagement $model */

$this->title = 'Update Master Performance Management: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Master Performance Managements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-performance-management-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
