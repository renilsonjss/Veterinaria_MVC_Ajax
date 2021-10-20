<?php

    require "conexao.php";

    
    $consulta = mysqli_query($conexao,"SELECT * FROM `usuario`");

    $json = array();
    while ($row = mysqli_fetch_array($consulta)) {
        $json[] = array(
            "id" => $row["id"],
            "nome" => $row["nome"],
            "sobreNome" => $row["sobreNome"],
            "email" => $row["email"],
            "senha" => $row["senha"],
            "pais" => $row["pais"],
            "sexo" => $row["sexo"],
            "nascimento" => $row["nascimento"]
        );
    };

   echo json_encode($json);

