<?php

use app\models\Area;
use app\models\Bloco;
use app\models\Situacao;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Ocorrencia $model */
/** @var yii\widgets\ActiveForm $form */
$blocos = ArrayHelper::map(Bloco::find()->all(), 'id', 'nome');

$areas = [];
if (!$model->isNewRecord && !empty($model->bloco_id)) {
    $areas = ArrayHelper::map(Area::find()->where(['bloco_id' => $model->bloco_id])->all(), 'id', 'nome');
}
?>

<div class="ocorrencia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <?= $form->field($model, 'bloco_id')->dropDownList($blocos, ['prompt' => 'Selecione um bloco','id' => 'bloco_id']) ?>

    <?=$form->field($model, 'area_id')->dropDownList($areas, ['prompt' => 'Selecione uma área','id' => 'area_id' ]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
    $urlListarAreas = Url::to(['/ocorrencia/listar-areas']);

    $js = <<<JS
    $(document).ready(function(){
        let blocoDropdown = $('#bloco_id');
        let  areaDropdown = $('#area_id');
        
        blocoDropdown.on('change', function(){
            var blocoId = $(this).val();
            
            areaDropdown.empty().append('<option value = "">Carregando...</option>').prop('disabled', true);
            
            if(!blocoId){
                areaDropdown.empty().append('<option value = "">Selecione um bloco...</option>').prop('disabled', true);
                return;
            }
            
            $.ajax({
                url: '$urlListarAreas',
                type: 'GET',
                data: {id: blocoId},
                success: function(data){
                    areaDropdown.empty().append('<option value = "">Selecione uma Area...</option>');
                    
                    $.each(data, function(key, value){
                        areaDropdown.append('<option value="'+value.id+'">'+value.nome+'</option>');
                    })
                    
                    areaDropdown.prop('disabled', false);
                },
                error: function(){
                    alert('Ocorreu um erro ao carregar as áreas!');
                    areaDropdown.empty().append('<option>Erro ao carregar</option>');
                }
            });
        })
        if (blocoDropdown.val()) {
        blocoDropdown.trigger('change');
    }
    })
    
    
    JS;
    $this->registerJs($js);
?>