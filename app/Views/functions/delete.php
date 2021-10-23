<?php

    require "Conexao.php";

    if($_POST){

        $id = $_POST["id"];

        $delete = "DELETE FROM `usuarios` WHERE  `usuarios`.`id` = '$id'";
        $queryDelete = mysqli_query($conexao, $delete);
        if($queryDelete){
            echo "Usuario deletado com sucesso!";
        }
        
    }

?>