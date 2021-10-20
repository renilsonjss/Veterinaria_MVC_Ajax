<?php

require_once 'Conexao.php';

Class Usuario
{
    private $con;

    public function __construct()
    {
        $this->con = Conexao::getConexao();
    }

    public function cadastrar($nome, $cpf, $email, $senha)
    {
        $cmd = $this->con->prepare("SELECT id FROM usuarios WHERE email = :e;");
        $cmd->bindValue(":e",$email);
        $cmd->execute();
        
        if($cmd->rowCount() > 0)
        {
            return false;
        }
        else
        {
            $cmd = $this->con->prepare("INSERT INTO usuarios (nome, cpf, email, senha) VALUES (:n, :c, :e, :s);");
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":c",$cpf);
            $cmd->bindValue(":e",$email);
            $cmd->bindValue(":s",md5($senha));
            $cmd->execute();
            
            return true;
        }
    }

    public function logar($email, $senha)
    {

        $cmd = $this->con->prepare("SELECT id FROM usuarios WHERE email = :e AND senha = :s;");
        $cmd->bindValue(":e",$email);
        $cmd->bindValue(":s",md5($senha));
        $cmd->execute();

        if($cmd->rowCount() > 0)
        {
            $dado = $cmd->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];

            return true;
        }
        else
        {
            return false;
        }
    }

}

?>