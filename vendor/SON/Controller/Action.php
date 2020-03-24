<?php

namespace SON\Controller;

abstract class Action
{
    protected $views;
    private $action;

    public function __construct()
    {
        $this->views = new \stdClass;
    }

    //Este método renderiza o layout caso queiramos usar ele
    //Se a gente não quiser usar o layout, devemos usar false
    //e, assim, vai executar apenas o conteúdo da página criada
    //A ideia é iserir o conteúdo dentro do Layout
    //O "false" é inserido no IndexController
    protected function render($action, $layout = true)
    {
        $this->action = $action;
        if ($layout == true && file_exists(__DIR__ . "/../../../App/Views/layout.phtml")){
            include_once __DIR__ . "/../../../App/Views/layout.phtml";
        }else{
            $this->content();
        }
    }

    //Método criado para substituir o include_once dentro dos
    //métodos que chama cada página
    protected function content()
    {
        //Pega a classe atual
        $current = get_class($this);

        //Essa linha pega o nome da classe, joga todas as letras
        //para minúsculo e tira a palavra Controller do nome. Ex.:
        //a classe "App\\Controllers\\IndexController" vai ficar
        //apenas "index". Também apaga o caminho da classe.
        /**
         * str_replace() -> serve para substituir parte da string
         * Primeiro item -> Procula pelo trecho dentro da string
         * Segundo item -> Substitui o termo procurado por este
         * Terceiro item -> A string que queremos pesquisar e retirar o termo
        */
        $singleClassName = strtolower((str_replace("Controller", "", str_replace("App\\Controllers\\","", $current))));

        //Este include cria a rota automática para a nossa view
        //$singleClassName é o diretório que engloba todas as nossas páginas
        //dessa categoria, enquanto action é exatamente a nossa página, exemplo,
        //"App/Views/index/contact.phtml"
        include_once __DIR__ . "/../../../App/Views/" . $singleClassName . "/" . $this->action . ".phtml";
    }
}