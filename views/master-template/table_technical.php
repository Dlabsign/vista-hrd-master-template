<?php
use yii\helpers\Html;
use yii\grid\GridView;

/** @var array $dataProviders */
/** @var int $positionId */
?>

<p>
    <?= Html::a('Create Technical', ['create-technical', 'position_id' => $positionId], ['class' => 'btn btn-success']) ?>
</p>

<?php foreach ($dataProviders as $type => $dataProvider): ?>
    <?php if (empty($type))
        continue; // skip jika template_type kosong ?>

    <h3><?= Html::encode($type) ?></h3>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'Area',
                'value' => function ($model) {
                return $model->area->core ?? '-';
            },
            ],

            [
                'attribute' => 'Key Result',
                'value' => function ($model) {
                return $model->area->key_val ?? '-';
            },
            ],
            [
                'attribute' => 'Weight',
                'value' => function ($model) {
                return $model->weight ? $model->weight . ' %' : '-';
            },
            ],
            [
                'attribute' => 'Unit',
                'value' => function ($model) {
                return $model->unit ?? '-';
            },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'master-template',
                'template' => ' {delete}',
                'urlCreator' => function ($action, $model, $key, $index) {

                if ($action === 'delete') {
                    return ['master-template/delete', 'id' => $model->id];
                }
            },
            ],
        ],
    ]) ?>
<?php endforeach; ?>