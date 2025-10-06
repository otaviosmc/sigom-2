<?php

use app\models\Ocorrencia;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\OcorrenciaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ocorrencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ocorrencia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar Ocorrencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute'=>'id',
                'label' => 'ID'
            ],
            [
                'attribute' => 'usuario_id',
                'label' => 'Usuário'
            ],
            [
                'attribute' => 'bloco_id',
                'label' => 'Bloco',
                'value' => function ($model) {
                    return $model->bloco->nome;
                }
            ],
            [
                'attribute' => 'area_id',
                'label' => 'Area',
                'value' => function ($model) {
                    return $model->area->nome;
                }
            ],
            [
                'attribute' => 'situacao_id',
                'label' => 'Situação',
                'value' => function ($model) {
                    return $model->situacao->nome;
                }
            ],
            //'descricao',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, Ocorrencia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
