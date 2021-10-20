<?php
	include "conexao.php";
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
	$sql = "INSERT INTO usuarios (nome,email,cpf,senha) VALUES ('$nome', '$email', '$senha','$cpf')";
	try {
        mysqli_query($connect, $sql);
    } catch (\Throwable $error) {
        die($error);
    }
	$response = array("success" => true);
	echo json_encode($response);
?>