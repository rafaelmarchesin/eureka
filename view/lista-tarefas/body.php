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




<p>AQUI ENTRA A LISTA</p>
<form action="index.php" method="POST">
    <input type="text" class="insere-tarefa" id="insere-tarefa" name="insere-tarefa">
    <input type="submit" value="Gravar">
</form>

<?php 
    require 'teste.php';
    echo "<h2>Seu nome é: {$teste}</h2>";