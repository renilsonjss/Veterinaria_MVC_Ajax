<?php 

require "conexao.php";

    if($_POST){
    $mail = $_POST["email"];
    $condultaUser = "SELECT * FROM `usuario` WHERE `email` = '$mail'";

    $user = mysqli_query($conexao, $condultaUser);
        $row = mysqli_num_rows($user);
        if($row <= 0){
        $nome =  $_POST["nome"];
        $senha =  $_POST["senha"];
        $sobreNome = $_POST["sobreNome"];
        $email = $_POST["email"];
        $dataNasc = $_POST["nascimento"];
        $sexo = $_POST["sexo"];
        $pais = $_POST["pais"];

        $query = "INSERT INTO `usuario` (`id`, `nome`, `sobreNome`, `email`, `nascimento`, `sexo`, `pais`, `senha`) VALUES
         (NULL, '$nome', '$sobreNome', '$email', '$dataNasc','$sexo', '$pais','$senha')";
        $insere = mysqli_query($conexao, $query);
    }else{
        echo  "<span class='alert alert-danger'>Usuário ja cadastrado!</span>";
    }
        
        
    }

    

?>