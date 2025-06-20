<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\LeadershipCompetencies $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Leadership Competencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);
?>
<div class="leadership-competencies-view">

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
                'attribute' => 'core_id',
                'value' => function ($model) {
                return $model->area ? $model->area->core : '(not set)';
            },
            ],
            [
                'attribute' => 'area_id',
                'value' => function ($model) {
                return $model->area ? $model->area->key_val : '(not set)';
            },
            ],
            [
                'attribute' => 'definition',
                'value' => function ($model) {
                return $model->area ? $model->area->definition : '(not set)';
            },
            ],
            'objectives',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d M Y'],
            ],
        ],
    ]) ?>

</div>