<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterTemplate $model */

$this->title = 'Create Master Template';
$this->params['breadcrumbs'][] = ['label' => 'Master Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-template-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
