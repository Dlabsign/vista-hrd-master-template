<?php
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\data\ActiveDataProvider[] $dataProviders */
/** @var int $positionId */
?>

<p>
    <?= Html::a('Create Leadership', ['create-leadership', 'position_id' => $positionId], ['class' => 'btn btn-success']) ?>
</p>

<?php foreach ($dataProviders as $type => $dataProvider): ?>
    <?php
    $models = $dataProvider->getModels();
    $filteredModels = [];

    foreach ($models as $model) {
        // Ambil hanya data general yang kolom unit dan template_type bernilai NULL
        if ($model->leadership == 1 && $model->unit === null && $model->template_type === null) {
            $filteredModels[] = $model;
        }
    }

    // Lewati jika tidak ada model yang memenuhi syarat
    if (empty($filteredModels)) {
        continue;
    }

    $filteredDataProvider = new ArrayDataProvider([
        'allModels' => $filteredModels,
        'pagination' => false,
    ]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $filteredDataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'Core Value',
                'value' => function ($model) {
                    return $model->leadershipas->area->core ?? '(not set)';
                },
            ],
            [
                'attribute' => 'Key Area',
                'value' => function ($model) {
                    return $model->leadershipas->area->key_val ?? '(not set)';
                },
            ],
            [
                'attribute' => 'Weight',
                'value' => function ($model) {
                    return $model->weight ? $model->weight . ' %' : '-';
                },
            ],
            [
                'attribute' => 'Definition',
                'value' => function ($model) {
                    return $model->leadershipas->area->definition ?? '(not set)';
                },
            ],
            [
                'attribute' => 'Objectives',
                'value' => function ($model) {
                    return $model->leadershipas->objectives ?? '(not set)';
                },
            ],
             [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'master-template',
                'template' => '{update} {delete}', // Tampilkan tombol update dan delete
                'urlCreator' => function ($action, $model, $key, $index) {
                    if (in_array($action, ['delete', 'update'])) {
                        return ['master-template/' . $action, 'id' => $model->id];
                    }
                },
            ],
        ],
    ]) ?>

<?php endforeach; ?>