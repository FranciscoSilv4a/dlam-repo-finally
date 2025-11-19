<?php
    session_start();
    if($_SESSION['passou3'] == 1) {
        $_SESSION['passou2'] = 0;
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valor = $_POST['alt'];
            if($valor) {
                $_SESSION['passou4'] = 1;
                $_SESSION['pontuacao'] += 50;
                header('location: lvl5.php');
                exit();
            }
            else {
                header('Location: morte.php');
                exit();
            }
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
    <title>Nível 4</title>
    <link rel="stylesheet" href="style/lvl4.css">
    <script defer src="js/events.js"></script>
</head>
<body>
    <div class="mainContainer">
        <div class="title">Tentativa número 4</div>
        <p class="txt">
            Este é...o mundo real. As anomalias passaram de monstros de desenho animado para hordas de bestas do apocalípse bíblico.
            Você acredita em Deus? Comece a rezar. O Vaticano nos deu uma descrição do demônio, confira nas dicas. Estes não
             são fruto da imaginação.
        </p>
    </div>
    <form class="btnContainer" action="lvl4.php" method="POST">
        <p class="title">
            Possibilidades:
        </p>
        <button class="btn" id="btnA" type="submit" name="alt">a) Aceitar a morte</button>
        <button class="btn" id="btnB" type="submit" name="alt">b) Correr</button>
        <button class="btn" id="btnC" type="submit" name="alt" value="1">c) Orar</button>
        <button class="btn" id="btnD" type="submit" name="alt">d) Lutar</button>
        <div class="dica"></div>
    </form>
    <div class="dicaContainer">
        <div class="close"></div>
        <p class="title" id="titleDicas">Dicas</p>
        <p class="txt">
            Nome: Melzegard, Arauto da Agonia
        </p>
        <p class="txt">
            Habilidades: <br>-> camuflagem<br>-> teletransporte<br>-> manipulação da realidade<br>-> instaurar agonia e desespero
        </p>
        <p class="txt">
            Procedimento: Intervenção divina
        </p>
    </div>
    <div class="imgBlack"></div>
    <div class="inventario">
        <div class="itemInventario full" id="item1">Walkie talkie</div>
    </div>
    <div class="hand"></div>
    <p class="version">Versão 0.01</p>
</body>
</html>