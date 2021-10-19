<?php
    require_once 'Models/usuarios.php';
    $u = new Usuario;
?>

<html lang="pt-br">

<header>

    <meta charset="utf-8"/>
    <title>Sistema de Login e Cadastro</title>
    <link rel="stylesheet" href="./Css/estilo.css">

</header>

<body>

    <div class="formulario">

        <h1>Login</h1>

        <form method="POST">

            <label for="email">Email:</label>
            <input type="email" name="email" maxlength="50">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" maxlength="20">
            <input type="submit" value="Entrar">
            <a href="cadastro.php">Cadastrar-se</a>

        </form>

    </div>

</body>

</html>