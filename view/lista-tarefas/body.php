<p>AQUI ENTRA A LISTA</p>
<form action="index.php" method="POST">
    <input type="text" class="insere-tarefa" id="insere-tarefa" name="insere-tarefa">
    <input type="submit" value="Gravar">
</form>

<?php 
    require 'teste.php';
    echo "<h2>Seu nome é: {$teste}</h2>";