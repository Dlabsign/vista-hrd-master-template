<?php

use app\models\MasterPerformanceManagement;
use app\models\WorkPerformance;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WorkPerformanceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Work Performances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-performance-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Work Performance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'Area',
                'value' => function ($model) {
                        return $model->area ? $model->area->core : '(not set)';
                    },
            ],
            [
                'attribute' => 'Defintion',
                'value' => function ($model) {
                        $definition = \app\models\MasterPerformanceManagement::findOne($model->definition);
                        return $definition ? $definition->definition : null;
                    },
            ],
            [
                'attribute' => 'Objective',
                'value' => function ($model) {
                        return $model->objectives ? $model->objectives : '(not set)';
                    },
            ],
            [
                'attribute' => 'Weight',
                'value' => function ($model) {
                        return $model->weight ? $model->weight : '(not set)';
                    },
            ],

            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}', // Only show update and delete buttons
                'urlCreator' => function ($action, WorkPerformance $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>


</div>