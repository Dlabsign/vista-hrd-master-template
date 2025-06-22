<?php

use app\models\LeadershipCompetencies;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LeadershipCompetenciesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var app\models\LeadershipCompetencies $model */

$this->title = 'Leadership Competencies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leadership-competencies-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Leadership Competencies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'Core Value',
                'value' => function ($model) {
                        return $model->area ? $model->area->core : '(not set)';
                    },
            ],
            [
                'attribute' => 'Key Area',
                'value' => function ($model) {
                        return $model->area ? $model->area->key_val : '(not set)';
                    },
            ],
            [
                'attribute' => 'Definition',
                'value' => function ($model) {
                        return $model->area ? $model->area->definition : '(not set)';
                    },
            ],
            [
                'attribute' => 'Objective',
                'value' => function ($model) {
                        return $model->objectives ? $model->objectives : '(not set)';
                    },
            ],
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}', // Only show update and delete buttons
                'urlCreator' => function ($action, LeadershipCompetencies $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>


</div>