<?php
    session_start();
    $error = "";
    if(!empty($_SESSION['error'])) {
        $error = $_SESSION['error'];
        $_SESSION['error'] = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style/contas.css">
</head>
<body>
    <form class="mainContainer" action="cadastrarUsuario.php" method="POST">
        <div class="title">Cadastro</div>
        <div class="contUser">
            <label for="nome" class="txt">Nome</label>
            <input type="text" name = "nome"required maxlength="50">

            <label for="senha" class="txt">Senha (8 caracteres)</label>
            <input type="password" name = "senha"required min-length="8" minlength="8">
        </div>
        <div class="btnCont">
            <button class="btn" id="btnHistoria" type="submit">Cadastrar</button>
            <button class="btn" id="btnInicio"><a href="index.php"><span>Início</span></a></button>
        </div>
        <a href="login.php" class="txt" id="redirecLink">Já tenho cadastro</a>
        <p class="txt" id="error"><?=$error?></p>
    </form>
    <p class="version">Versão 0.01</p>
</body>
</html>