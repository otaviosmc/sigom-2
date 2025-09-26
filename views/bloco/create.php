<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Bloco $model */

$this->title = Yii::t('app', 'Cadastrar Bloco');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Blocos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bloco-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
