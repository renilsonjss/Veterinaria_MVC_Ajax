<?php

    require "conexao.php";

    if($_POST){

        $id = $_POST["id"];

        $delete = "DELETE FROM `usuario` WHERE  `usuario`.`id` = '$id'";
        $queryDelete = mysqli_query($conexao, $delete);
        if($queryDelete){
            echo "Usuario deletado com sucesso!";
        }
        
    }

?>