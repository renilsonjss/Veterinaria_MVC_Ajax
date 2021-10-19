<?php

Class Core
{
    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        if(isset($_GET['pag']))
        {
            $url = $_GET['pag'];
        }

        //possui informacao apos o dominio www.site.com/classe/metodo/parametro
        if(!empty($url))
        {
            $url = explode('/', $url);
            $controller = $url[0].'Controller';
            array_shift($url);

            //se o usuario enviou metodo
            if(isset($url[0]) && !empty($url[0]))
            {
                $metodo = $url[0];
                array_shift($url);
            }
            else //usuario enviou somente a classe
            {
                $metodo = 'index';
            }

            if(count($url) > 0)
            {
                $parametros = $url;
            }
        }
        
        //www.site.com/
        else
        {
            $controller = 'homeController';
            $metodo = 'index';
        }

        $caminho = 'Sistema_veterinário/Controllers/'.$controller.'.php';

        If(!file_exists($caminho) && !method_exists($controller, $metodo))
        {
            $controller = 'homeController';
            $metodo = 'index';
        }

        if (!isset($parametros))
        {
            $parametros = array();      
        }

        $c = new $controller;

        $c->{$metodo}($parametros);
    }
}

?>