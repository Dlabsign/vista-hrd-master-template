<?php
use yii\helpers\Html;
use yii\grid\GridView;

/** @var array $overview */
/** @var int $positionId */
?>

<p>
    <?= Html::a('Create Overview', ['create-overview', 'positionId' => $positionId], ['class' => 'btn btn-success']) ?>
</p>
<?= GridView::widget([
    'dataProvider' => $overview, // ✅ benar
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'General',
            'value' => function ($model) {
                return $model->general !== null && $model->general !== '' ? $model->general . ' %' : '-';
            },
        ],
        [
            'attribute' => 'Leadership',
            'value' => function ($model) {
                return $model->leadership !== null && $model->leadership !== '' ? $model->leadership . ' %' : '-';
            },
        ],
        [
            'attribute' => 'Target',
            'value' => function ($model) {
                return $model->target !== null && $model->target !== '' ? $model->target . ' %' : '-';
            },
        ],
        [
            'attribute' => 'Work',
            'value' => function ($model) {
                return $model->work !== null && $model->work !== '' ? $model->work . ' %' : '-';
            },
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'controller' => 'master-template',
            'template' => '{update} {delete}',
            'urlCreator' => function ($action, $model, $key, $index) {
                return ["master-template/{$action}-overview", 'id' => $model->id];
            },
        ],

    ],
]) ?>