<?php

namespace App\Controllers;

use SON\Controller\Action;
use SON\Di\Container;

class IndexController extends Action
{
    //Os métodos inseridos aqui chamam as views
    public function todolist()
    {
        //Executa a query a partir da tabela setada na classe TodoList
        $todolist = Container::getModel("TodoList");
        $todolist->saveTask();
        $this->views->todolist = $todolist->fetchAll();
        
        /**
         * Renderiza o layout.php. Para renderizar direto a
         * página todolist, bastaria colocar na frete de
         * 'todolist' o booleano "false".
        */
        $this->render('todolist');
    }
}