<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TargetPerformance $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Target Performances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="target-performance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'area_id',
                'value' => function ($model) {
                return $model->area ? $model->area->key_val : '(not set)';
            },
            ],
            'result',
            'unit',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d M Y'], // format sesuai kebutuhan
            ],
        ],
    ]) ?>

</div>