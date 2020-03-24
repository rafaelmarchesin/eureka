<?php

namespace App;

use SON\init\Bootstrap;

class Route extends Bootstrap
{
    // Método responsável por definir as rodas da nossa aplicação
    /**
     * "route" -> O caminho digitado no navegador
     * "controller" -> Indica o arquivo que vai servir de Controller para essa rota
     * "action" -> Define qual será o método que irá rodar ao acessar essa rota
    */
    protected function initRoutes()
    {
        $routes['todolist'] = array('route' => '/', 'controller' => 'indexController', 'action' => 'todolist');
        
        //Envia esse array para o método "setRoutes()"
        $this->setRoutes($routes);
    }
}

// Neste arquivo fica apenas as configurações que devemos
// inserir conforme formos criando os arquivos da nossa
// aplicação.