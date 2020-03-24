<?php

namespace SON\init;

//Essa é uma classe abstrata criada a partir da classe Route
//É usada apenas para implementar as nossas rotas
abstract class Bootstrap
{
    private $routes;

    // Responsável por construir a classe
    public function __construct()
    {
        //Ao instanciar essa classe, é chamado o método "initRoutes()"
        $this->initRoutes();

        //Roda a aplicação com a URL que pegou do navegador
        $this->run($this->getURL());
    }

    //Este método abstrato está setado na classe Route
    abstract protected function initRoutes();

    //Este método recebe o array que vem do "initRoutes()"
    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    // Responsável por rodar a aplicação
    protected function run($url)
    {
        //Neste método, conversamos diretamente com os elementos de dentro do "initRoutes()"
        //"route" e "controller" se referem ao route e controller de dentro do array
        array_walk($this->routes, function($route) use ($url){
            if ($url == $route['route']){

                //Pega a classe que vem da chave "controller" em "initRoutes()"
                //Esse ucfirst é para colocar a primeira letra em maiúsculo, já
                //que as nossas classes vão ter a primeira letra em maiúscilo
                $class = "App\\Controllers\\" . ucfirst($route['controller']);
                
                //Instancia a classe gerada a partir da linha acima
                $controller = new $class;

                //Pega o nome do método principal da classe
                $action = $route['action'];

                //Roda o método principal da classe
                //Pode parecer estranho, mas a variável $action tem guardado
                //o nome do método que vai rodar, exemplo "index()". Esse método
                //tem que estar presente dentro da classe que estamos trabalhando
                $controller->$action();
            }
        });
    }

    // Método responsável por pegar a URL indicada no navegador
    protected function getURL()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

// Explicação deste arquivo:
/**
 * Este arquivo é uma classe abstrata que será carregada quando
 * a classe Route for chamada. Ele limpa visualmente a classe
 * Route e também obriga a classe Route a ter o método initRoutes()
*/