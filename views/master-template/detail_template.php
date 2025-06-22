<?php
use yii\bootstrap5\Tabs;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterPosition $model */
/** @var yii\data\ActiveDataProvider $probationProvider */
/** @var yii\data\ActiveDataProvider $pkwtProvider */

$this->title = $model->position_name;
$this->params['breadcrumbs'][] = ['label' => 'Master Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-template-view">

    <?= Tabs::widget([
        'items' => [
            [
                'label' => 'Technical Competencies',
                'content' => $this->render('table_technical', [
                    'dataProviders' => $dataProviders,
                    'positionId' => $model->id,
                ]),
                'active' => true,
            ],
            [
                'label' => 'General Competencies',
                'content' => $this->render('table_general', [
                    'dataProviders' => $dataProviders,  // <-- ini diperbaiki jadi pakai jamak
                    'positionId' => $model->id,
                ]),
            ],
            [
                'label' => 'Leadership Competencies',
                'content' => $this->render('table_leadership', [
                    'dataProviders' => $dataProviders,  // <-- ini diperbaiki jadi pakai jamak
                    'positionId' => $model->id,
                ]),
            ],

            [
                'label' => 'Overview',
                'content' => '<div>Ringkasan dari semua kompetensi bisa diletakkan di sini.</div>',
            ],
        ],
    ]) ?>

</div>