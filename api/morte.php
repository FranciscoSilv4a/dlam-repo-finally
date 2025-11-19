<?php
    session_start();

    if($_SESSION['podeComecar'] == 1) {
        if(isset($_SESSION['usuario'])) {
            $pontuacao = $_SESSION['pontuacao'];
            $nome = $_SESSION['usuario'];
            $senha = $_SESSION['senha'];
            //
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                include 'conexao.php';

                $sql = "INSERT INTO `tentativas`(`nome`,`senha`, `pontuacao`) VALUES ('$nome', '$senha', '$pontuacao')";
                mysqli_query($con, $sql);

                header('Location: index.php');
                exit();
            }
        }
    }
    else {
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game over</title>
    <link rel="stylesheet" href="style/morte.css">
    <script defer src="js/events.js"></script>
</head>
<body>
    <form class="bloodContainer" action="morte.php" method="POST">
        <p class="title" id="gameOver">Pontuação: <?=$pontuacao?></p>
        <button class="btn" type="submit" id="restartBtn">Recomeçar</button>
    </form>
</body>
</html>