<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Situacao $model */

$this->title = Yii::t('app', 'Criar Situacao');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Situação'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="situacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
