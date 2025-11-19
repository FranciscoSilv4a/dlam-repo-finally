<?php
    session_start();

    $_SESSION['pontuacao'] = 0;
    $_SESSION['podeComecar'] = 0;
    $_SESSION['passou1'] = 0;
    $_SESSION['passou2'] = 0;
    $_SESSION['passou3'] = 0;
    $_SESSION['passou4'] = 0;
    $_SESSION['passou5'] = 0;
    $_SESSION['placar'] = 0;

    $usuario = "";
    $error = "";
    if(!empty($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $_SESSION['placar'] = 1;
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($usuario)) {
            $_SESSION['podeComecar'] = 1;
            header('Location: lvl1.php');
            exit();
        }
        else {
            $error = "Logue para jogar";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="style/index.css">
    <script defer src="js/index.js"></script>
</head>
<body>
    <form class="mainContainer" action="index.php" method="POST">
        <div class="logo"></div>
        <p class="txt"><?=$usuario?></p>
        <div class="contUser">
            <button class="btn" id="btnLogin"><a href="login.php"><span>Logar</span></a></button>
            <button class="btn" id="btnCadastro"><a href="cadastro.php"><span>Cadastrar</span></a></button>
        </div>
        <button class="btn" id="btnJogar" type="submit">Jogar</button>
        <button class="btn" id="btnPlacar"><a href="placar.php"><span>Placar</span></a></button>
        <button class="btn" id="btnHistoria"><a href="story.php"><span>História</span></a></button>
        <p class="txt" id="error"><?=$error?></p>
    </form>
    <p class="version">Versão 0.01</p>
</body>
</html>