
<div class="container" id="container">
    <div class="entrada-dados-container" id="entrada-dados-container">
        <form action="index.php" method="POST">
            <input type="text" class="entrada-dados" id="entrada-dados" name="tarefa" placeholder="Nova tarefa...">
        </form>
    </div>
    <div class="lista" id="lista">
        <div class="container-tarefa" id="container-tarefa">
            <input type="checkbox" class="tarefa" id="tarefa" name="tarefa" value="tarefa">
            Tarefa 1
        </div>
    </div>
</div>

<?php

require __DIR__ . '/modulos/ListaTarefas.php';

$teste = new ListaTarefas;

//var_dump($teste->entradaDados('tarefa'));

//echo $teste->entradaDados();

?>
