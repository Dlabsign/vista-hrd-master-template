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
            //'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, LeadershipCompetencies $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>


</div>