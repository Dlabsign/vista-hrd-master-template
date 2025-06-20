<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\WorkPerformance $model */

$this->title = 'Create Work Performance';
$this->params['breadcrumbs'][] = ['label' => 'Work Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-performance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
