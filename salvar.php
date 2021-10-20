<?php
	include "conexao.php";
	$nome = $_POST['nome'];
    $id_veterinario = $_POST['id_veterinario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $crmv = $_POST['crmv'];
	$sql = "INSERT INTO veterinarios (nome,id_veterinario,email,cpf,senha,crmv) VALUES ('$nome', '$id_veterinario', '$email', '$cpf', '$senha', '$crmv')";
	try {
        mysqli_query($connect, $sql);
    } catch (\Throwable $error) {
        die($error);
    }
	$response = array("success" => true);
	echo json_encode($response);
?>
