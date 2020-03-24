<?php

namespace SON\Model;

abstract class Table
{
    protected $db;
    protected $table;

    //O construct fica responsável por fazer a conexão com o Banco de Dados
    public function __construct($conn_db)
    {
        $this->db = $conn_db;
    }

    //Método que vai listar todos os clientes
    public function fetchAll()
    {
        //Essa query é jogada para o Controller e, depois, é
        //exibido na página renderizada
        $query = "SELECT * FROM {$this->table};";
        return $this->db->query($query);
    }

    public function saveTask()
    {
        $task = $_POST['task'];
        $query = 'INSERT INTO ' . $this->table . ' (task) VALUES ("'. $task .'")';
        
        //Se o Get não receber nada, ele não roda a Query
        if ($task != null) {
            $this->db->query($query);
        }
    }
}