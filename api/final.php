<?php
    session_start();
    if($_SESSION['passou5'] == 1) {
        $_SESSION['passou4'] = 0;
        $pontuacao = $_SESSION['pontuacao'];
        $nome = $_SESSION['usuario'];
        $senha = $_SESSION['senha'];
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            include 'conexao.php';

            $sql = "INSERT INTO `tentativas`(`nome`,`senha`, `pontuacao`) VALUES ('$nome', '$senha', '$pontuacao')";
            mysqli_query($con, $sql);

            header('Location: index.php');
            exit();
        }
    }
    else {
        header('Location: intrusos.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim</title>
    <link rel="stylesheet" href="style/final.css">
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer" id = "mainLeft">
        <img src="issets/logo.png" alt="" class= "logo">
        <p class="txt">
            Após aquele momento, tudo se encaminhou. O mal foi vencido, a paz instaurada, com sua ajuda, soldado.<br><br>
            "Ainda que eu ande pelo vale da sombra da morte, não temerei mal algum, porque tu estás comigo" (Salmos 23:4).
        </p>
    </div>

    <form class="btnContainer" action="final.php" method="POST">
        <p class="title" id="gameOver">Score: <?=$pontuacao?></p>
        <button class="btn" type="submit" name="alt" id="btnInicio">Início</button>
    </form>

    <div class="mainContainer" id = "mainRight">
        <img src="issets/logo.png" alt="" class= "logo">
        <p class="txt">
            Recado dos desenvolvedores:<br><br>
            Agradecemos por experienciar nosso jogo, que mesmo que simples, exigiu certa paciência, proporcionando também a nós, 
            desenvolvedores, momentos de diversão e aprendizado. Esperamos que tenha gostado do projeto, obrigado por fazer parte disso.
        </p>
    </div>

    <p class="version">Versão 0.01</p>
</body>
</html>