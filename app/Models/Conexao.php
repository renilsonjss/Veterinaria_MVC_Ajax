<?php

Class Conexao
{
    private static $instancia;

    private function __construct(){}

    public static function getConexao()
    {
        if(!isset(self::$instancia))
        {
            $dbname = 'sistemaVeterinario';
            $host = 'localhost';
            $user = 'root';
            $senha = '';

            try
            {
                self::$instancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);
            }
            catch (Exception $e)
            {
                echo 'Erro: '.$e;
            }
        }

        return self::$instancia;
    }
}

?>