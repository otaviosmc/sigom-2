<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Bloco $model */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Blocos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bloco-view">

<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->

    <p>
        <?= Html::a(Yii::t('app', 'Alterar'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Deletar'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Deseja mesmo deletar esse bloco?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nome',
        ],
    ]) ?>

</div>
