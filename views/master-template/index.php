<?php
use yii\grid\GridView;
use yii\helpers\Html;
use app\models\MasterTemplate;

$this->title = 'Master Templates';
$this->params['breadcrumbs'][] = $this->title;

// ✅ Ambil semua data MasterTemplate yang aktif (flag = 1)
$templates = MasterTemplate::find()->where(['flag' => 1])->all();

$sum = ['technical' => 0, 'general' => 0, 'leadership' => 0];
$count = ['technical' => 0, 'general' => 0, 'leadership' => 0];

foreach ($templates as $template) {
    if ($template->technical == 1 && is_numeric($template->weight)) {
        $sum['technical'] += $template->weight;
        $count['technical']++;
    }
    if ($template->general == 1 && is_numeric($template->weight)) {
        $sum['general'] += $template->weight;
        $count['general']++;
    }
    if ($template->leadership == 1 && is_numeric($template->weight)) {
        $sum['leadership'] += $template->weight;
        $count['leadership']++;
    }
}

$avg = [];
$totalWeight = 0;
foreach (['technical', 'general', 'leadership'] as $type) {
    if ($count[$type] > 0) {
        $avg[$type] = round($sum[$type] / $count[$type], 2);
        $totalWeight += $avg[$type];
    } else {
        $avg[$type] = null;
    }
}
?>

<div class="master-template-index">
    <h1><?= Html::encode($this->title) ?></h1>



    <!-- ✅ Tabel Daftar Template -->
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
                'attribute' => 'Department',
                'value' => function ($model) {
                        return $model->department && $model->department->is_void == 0
                            ? $model->department->department_name
                            : 'Non Active Depart';
                    },
            ],
            [
                'attribute' => 'Status',
                'value' => function ($model) {
                        return ($model->updated_at ?? $model->timestamp)
                            ? (isset($model->updated_at) ? 'Updated at ' : 'Created at ') .
                            Yii::$app->formatter->asDate($model->updated_at ?? $model->timestamp, 'php:d M Y')
                            : '-';
                    },
            ],

            // Kolom Technical
            [
                'label' => 'Technical',
                'value' => function ($model) {
                        $sum = 0;
                        $count = 0;
                        foreach ($model->templates as $t) {
                            if ($t->technical == 1 && is_numeric($t->weight)) {
                                $sum += $t->weight;
                                $count++;
                            }
                        }
                        return $count > 0 ? round($sum / $count, 0) . '%' : '-';
                    }
            ],

            // Kolom General
            [
                'label' => 'General',
                'value' => function ($model) {
                        $sum = 0;
                        $count = 0;
                        foreach ($model->templates as $t) {
                            if ($t->general == 1 && is_numeric($t->weight)) {
                                $sum += $t->weight;
                                $count++;
                            }
                        }
                        return $count > 0 ? round($sum / $count, 0) . '%' : '-';
                    }
            ],

            // Kolom Leadership
            [
                'label' => 'Leadership',
                'value' => function ($model) {
                        $sum = 0;
                        $count = 0;
                        foreach ($model->templates as $t) {
                            if ($t->leadership == 1 && is_numeric($t->weight)) {
                                $sum += $t->weight;
                                $count++;
                            }
                        }
                        return $count > 0 ? round($sum / $count, 0) . '%' : '-';
                    }
            ],

            // Action
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