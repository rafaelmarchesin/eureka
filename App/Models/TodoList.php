<?php

namespace App\Models;

use SON\Model\Table;

class TodoList extends Table
{
    //Essa variável joga para dentro da classe Table
    //o nome da tabela que será usada. Isso é feito
    //como forma de abstração.
    protected $table = "todo_list_table";
}