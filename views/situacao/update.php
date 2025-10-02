<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Situacao $model */

$this->title = Yii::t('app', 'Alterar Situacao', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Situação'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->nome]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Alterar');
?>
<div class="situacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
