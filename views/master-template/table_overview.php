<?php
use yii\helpers\Html;

/** @var yii\data\ActiveDataProvider[] $dataProviders */

$sum = ['technical' => 0, 'general' => 0, 'leadership' => 0];
$count = ['technical' => 0, 'general' => 0, 'leadership' => 0];

// Loop semua data dari berbagai template_type (probation, PKWT, dst)
foreach ($dataProviders as $provider) {
    $models = $provider->getModels();

    foreach ($models as $model) {
        if ($model->technical == 1 && is_numeric($model->weight)) {
            $sum['technical'] += $model->weight;
            $count['technical']++;
        }
        if ($model->general == 1 && is_numeric($model->weight)) {
            $sum['general'] += $model->weight;
            $count['general']++;
        }
        if ($model->leadership == 1 && is_numeric($model->weight)) {
            $sum['leadership'] += $model->weight;
            $count['leadership']++;
        }
    }
}

// Hitung rata-rata & total
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

<div class="overview-box">

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Technical Competencies</th>
                <th>General Competencies</th>
                <th>Leadership Competencies</th>
                <th>Total Weighing</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $avg['technical'] !== null ? $avg['technical'] . '%' : 'Not Applied' ?></td>
                <td><?= $avg['general'] !== null ? $avg['general'] . '%' : 'Not Applied' ?></td>
                <td><?= $avg['leadership'] !== null ? $avg['leadership'] . '%' : 'Not Applied' ?></td>
                <td><strong><?= round($totalWeight, 2) ?>%</strong></td>
            </tr>
        </tbody>
    </table>
</div>