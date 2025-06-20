<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TargetPerformance $model */

$this->title = 'Create Target Performance';
$this->params['breadcrumbs'][] = ['label' => 'Target Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="target-performance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
