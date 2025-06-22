<?php
use yii\grid\GridView;
use yii\helpers\Html;
?>

<div class="master-template-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'Position',
                'value' => function ($model) {
                        return $model->position_name;
                    },
            ],
            [
                'attribute' => 'Departmen',
                'value' => function ($model) {
                        return $model->department && $model->department->is_void == 0 ? $model->department->department_name : 'Non Active Depart';
                    },
            ],
            [
                'attribute' => 'Status',
                'value' => function ($model) {
                        return 'Created At '. $model->timestamp;
                    },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{detail-template}',
                'buttons' => [
                    'detail-template' => function ($url, $model) {
                            return Html::a('Detail Template', ['detail-template', 'id' => $model->id], [
                                'class' => 'btn btn-info btn-sm'
                            ]);
                        },
                ],
            ],
        ],
    ]); ?>

</div>