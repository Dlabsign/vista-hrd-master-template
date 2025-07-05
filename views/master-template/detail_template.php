<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterPosition $model */
/** @var yii\data\ActiveDataProvider $probationProvider */
/** @var yii\data\ActiveDataProvider $pkwtProvider */

$this->title = $model->position_name;
$this->params['breadcrumbs'][] = ['label' => 'Master Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    .custom-tabs {
        display: flex;
        border-bottom: 1px solid #ccc;
        margin-bottom: 1rem;
    }

    .custom-tab {
        padding: 10px 15px;
        cursor: pointer;
        border: 1px solid transparent;
        border-bottom: none;
        background: #f5f5f5;
        margin-right: 5px;
    }

    .custom-tab.active {
        background: #fff;
        border-color: #ccc;
        border-bottom: 1px solid #fff;
        font-weight: bold;
    }

    .custom-tab-content {
        display: none;
    }

    .custom-tab-content.active {
        display: block;
    }
</style>

<div class="master-template-view">

    <div class="custom-tabs" id="tab-buttons">
        <div class="custom-tab active" data-tab="tab-technical">Technical Competencies</div>
        <div class="custom-tab" data-tab="tab-general">General Competencies</div>
        <div class="custom-tab" data-tab="tab-leadership">Leadership Competencies</div>
        <div class="custom-tab" data-tab="tab-overview">Overview</div>
    </div>

    <div id="tab-technical" class="custom-tab-content active">
        <?= $this->render('table_technical', [
            'dataProviders' => $dataProviders,
            'positionId' => $model->id,
        ]) ?>
    </div>
    <div id="tab-general" class="custom-tab-content">
        <?= $this->render('table_general', [
            'dataProviders' => $dataProviders,
            'positionId' => $model->id,
        ]) ?>
    </div>
    <div id="tab-leadership" class="custom-tab-content">
        <?= $this->render('table_leadership', [
            'dataProviders' => $dataProviders,
            'positionId' => $model->id,
        ]) ?>
    </div>
    <div id="tab-overview" class="custom-tab-content">
        <?= $this->render('table_overview', [
            'overview' => $overview,
            'positionId' => $model->id,
        ]) ?>
    </div>
</div>

<?php
$this->registerJs(<<<JS
    const tabs = document.querySelectorAll('.custom-tab');
    const contents = document.querySelectorAll('.custom-tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            contents.forEach(c => c.classList.remove('active'));

            tab.classList.add('active');
            const target = tab.getAttribute('data-tab');
            document.getElementById(target).classList.add('active');
        });
    });
JS);
?>