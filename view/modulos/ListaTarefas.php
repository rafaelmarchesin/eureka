<?php

//Construir a lista de tarefas aqui

require_once __DIR__ . "/modelos/ModeloLista.php";

class ListaTarefas extends ModeloLista
{
    private $conn;
    private $tarefa;

    /* Função usada para conectar ao banco de dados */
    public function entradaDados($nova_tarefa = null)
    {
        /* Conecta ao Banco de Dados */
        $this->conn = new mysqli('172.22.0.2', 'root', 'Foxit258', 'lista_tarefas');

        if ( $nova_tarefa == null ) {
            $this->tarefa = 'É nulo';
        } else {
            $this->tarefa = $_POST[$nova_tarefa];
        }
        
        return $this->tarefa;
    }

    public function armazenamentoDados()
    {
       
    }

    public function leituraDados()
    {
        
    }

    public function delecaoDados()
    {
        
    }
}

$teste2 = new ListaTarefas;

echo $teste2->entradaDados();