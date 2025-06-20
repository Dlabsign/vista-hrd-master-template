<?php

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
                'attribute' => 'definition',
                'value' => function ($model) {
                        $definition = \app\models\MasterPerformanceManagement::findOne($model->definition);
                        return $definition ? $definition->definition : null;
                    },
            ],
            'objectives:ntext',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d M Y'], // format sesuai kebutuhan
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, WorkPerformance $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>


</div>