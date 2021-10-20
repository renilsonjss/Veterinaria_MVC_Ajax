<?php

    require "conexao.php";

    if(isset($_POST)){
        $id = $_POST["id"];
        $nome =  $_POST["nome"];
        $senha =  $_POST["senha"];
        $sobreNome = $_POST["sobreNome"];
        $email = $_POST["email"];
        $dataNasc = $_POST["nascimento"];
        $sexo = $_POST["sexo"];
        $pais = $_POST["pais"];

        $actualiza = "UPDATE `usuario` SET `nome` = '$nome', `sobreNome` = '$sobreNome', `email` = '$email', `nascimento` = '$dataNasc', `sexo` = '$sexo',`pais` = '$pais',`senha` = '$senha' WHERE `usuario`.`id` = '$id'";
        $user = mysqli_query($conexao, $actualiza);
    }  
?>