<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterPerformanceManagement $model */

$this->title = 'Create Master Core';
$this->params['breadcrumbs'][] = ['label' => 'Master Core', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-performance-management-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
