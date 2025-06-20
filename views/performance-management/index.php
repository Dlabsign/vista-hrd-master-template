<?php

use app\models\MasterPerformanceManagement;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MasterPerformanceManagementSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Master Performance Managements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-performance-management-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Master Performance Management', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'core',
            'key_val',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:d M Y'], // format sesuai kebutuhan
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MasterPerformanceManagement $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>


</div>