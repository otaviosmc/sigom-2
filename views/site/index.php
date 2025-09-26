<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Bem-vindo ao SIGOM!</h1>

        <p class="lead">Cadastre suas ocorrências de manutenção sem preocupação</p>

        <?php echo Html::a('Criar ocorrência', ['ocorrencia/create'], ['class' => 'btn btn-lg btn-success']) ?>
    </div>

</div>
