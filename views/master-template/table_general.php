<?php
use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\data\ActiveDataProvider[] $dataProviders */
/** @var int $positionId */
?>

<p>
    <?= Html::a('Create General', ['create-general', 'position_id' => $positionId], ['class' => 'btn btn-success']) ?>
</p>

<?php foreach ($dataProviders as $type => $dataProvider): ?>

    <?php
    // Cek apakah dataProvider punya data yang objectives-nya tidak kosong
    $data = $dataProvider->getModels();
    $hasObjective = false;

    foreach ($data as $model) {
        if (!empty($model->objectives)) {
            $hasObjective = true;
            break;
        }
    }

    if (!$hasObjective) {
        continue; // skip jika tidak ada data objectives yang terisi
    }
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'area_id',
                'value' => function ($model) {
                    return $model->area->core ?? '(not set)';
                },
            ],
            [
                'attribute' => 'area',
                'value' => function ($model) {
                    return $model->area->key_val ?? '(not set)';
                },
            ],
            'objectives',
            [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'master-template',
                'template' => '{update} {delete}',
            ],
        ],
    ]) ?>

<?php endforeach; ?>