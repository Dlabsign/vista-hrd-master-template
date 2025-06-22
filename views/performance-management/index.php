<?php

use app\models\MasterPerformanceManagement;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MasterPerformanceManagementSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Core';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-performance-management-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Core', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'Core',
                'value' => function ($model) {
                        return $model->core ?? '(not set)';
                    },
            ],
            [
                'attribute' => 'Value',
                'value' => function ($model) {
                        return $model->key_val ?? '(not set)';
                    },
            ],
            [
                'attribute' => 'Definition',
                'value' => function ($model) {
                        return $model->definition ?? '(not set)';
                    },
            ],
            [
                'attribute' => 'Create At',
                'value' => function ($model) {
                        return $model->created_at ?? '(not set)';
                    },
                'format' => ['date', 'php:d M Y'], // format sesuai kebutuhan
            ],

            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}', // Only show update and delete buttons
                'urlCreator' => function ($action, MasterPerformanceManagement $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>


</div>