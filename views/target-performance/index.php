<?php

use app\models\TargetPerformance;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TargetPerformanceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Target Performances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="target-performance-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Target Performance', ['create'], ['class' => 'btn btn-success']) ?>
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
                        return $model->area->core ?? '(not set)';
                    },
            ],
            [
                'attribute' => 'Key Results',
                'value' => function ($model) {
                        return $model->area->key_val ?? '(not set)';
                    },
            ],
            [
                'attribute' => 'Unit',
                'value' => function ($model) {
                        return $model->unit ?? '(not set)';
                    },
            ],
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}', // Only show update and delete buttons
                'urlCreator' => function ($action, TargetPerformance $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>
</div>