<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterTemplate $model */

$this->title = 'Update Master Template: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Master Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-template-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
